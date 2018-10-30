<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Session;
use App\Product;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::all();

        return view('brand.view', ['brand' => $brands]);
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $brands = Brand::create($inputs);

        Session::flash('success','Thêm danh mục thành công');

        return redirect()->route('brand.index');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view('brand.edit',['brand'=>$brand]);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $inputs = $request->all();
        $brand->update($inputs);
        Session::flash('success','Edit thành công');

        return redirect()->route('brand.index');
    }

    public function destroy($id)
    {
        $check = Product::where('brand_id',$id)->count();
        if($check>0){
            Session::flash('error','Bạn không thể xóa thương hiệu đang có sản phẩm');
        }
        else{
            $brand = Brand::destroy($id);
            Session::flash('success','Delete thành công');
        }

        return redirect()->route('brand.index');
    }
}
