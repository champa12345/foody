<?php

namespace App\Http\Controllers\Front;

use App\Comment;
use App\Image;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Request;
class ProductController extends Controller
{
    //
    public function __construct()
    {
        $cate = Category::all();
        $product = Product::all();
        view()->share('cate',$cate);
        view()->share('listproduct',$product);
    }

    public function index(){
        $product = Product::paginate(12);
        return view('front.product',['product'=>$product]);
    }

    public function show($id){
        $product = Product::findOrFail($id);
        $cate_id = $product->category_id;
        $comment = Comment::where('product_id',$id)->orderBy('created_at','DESC')->paginate(2);
        $count = Comment::where('product_id',$id)->count();
        $productrecommend = Product::where('category_id','=',$cate_id)->get();


        if(Request::ajax()) {
            return view('front.product_comment', [
                'comment' => $comment,
                'count' => $count
            ]);
        }

        return view('front.productdetail', [
            'item' => $product,
            'productrecommend' => $productrecommend,
            'comment' => $comment,
            'count' => $count
        ]);
    }

}
