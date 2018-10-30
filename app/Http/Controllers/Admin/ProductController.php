<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Product;
use App\Category;
use App\Brand;
use App\Image;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $list = Product::all();
        $list = Product::where('price','>=',0);
        if ($request->has('keyword')){
            $keyword = $request->keyword;
            $list = $list->where('name','like','%'.$keyword.'%');
        }

        $list = $list->orderBy('created_at', 'DESC')->paginate(10);

        return view('product.viewlist', ['listproduct' => $list]);
    }

    public function create()
    {
        $cate = Category::pluck('name');
        $brand = Brand::pluck('name','id');

        return view('product.create',['cate' => $cate,'brand' => $brand]);
    }

    public function store(ProductRequest $request)
    {
       $filename='';
        if ($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $dir = public_path('uploads/product');
            $file->move($dir,$filename);
        }
        $p = new Product();
        $p->name = $request->name;
        $p->price = $request->price;
        $p->thumbnail = $filename;
        $p->discount = $request->discount;
        $p->category_id = $request->category_id+1;
        $p->brand_id = $request->brand_id;
        $p->description = $request->description;
        $p->status = $request->status;
        $p->save();

        if ($request->hasFile('image')){
            $imgs = $request->file('image');
            foreach ($imgs as $fileimg){
                $fName = md5(date('Y-m-d H:i:s').rand(0, 10000)) . '.' . $fileimg->getClientOriginalExtension();
                $fileimg->move(public_path('uploads/product/detail'),$fName);
                $img = new Image();
                $img->name = $fName;
                $img->product_id = $p->id;
                $img->save();
            }
        }
        Session::flash('success','Thêm sản phẩm thành công');

        return redirect('admin/product');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $cate = Category::pluck('name');
        $brand = Brand::pluck('name','id');
        return view('product.edit',['product'=>$product,'cate'=>$cate,'brand'=>$brand]);

    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $inputs = $request->all();
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move('uploads/product', $filename);
            $inputs['thumbnail'] = $filename;
        }
        $product->update($inputs);
        Session::flash('success','Cập nhật sản phẩm thành công');

        return redirect('admin/product');
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        Session::flash('success','xoa san pham thành công');

        return redirect('admin/product');
    }
}
