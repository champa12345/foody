<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\News;
class HomeController extends Controller
{
    public function __construct()
    {
        $cate = Category::all();
        $product = Product::where('price','>',0)->inRandomOrder()->get();
        $news = News::all();
        $prod = Product::where('price','>',0)->orderBy('created_at','DESC')->get();
        view()->share('cate',$cate);
        view()->share('product',$product);
        view()->share('news',$news);
        view()->share('prod',$prod);
        return view('front.home');
    }

    public function getCate() {

        return view('front.home');
    }

    public function login(){
        return view('front.login');
    }

    public function account(){
        return view('front.account');
    }

}
