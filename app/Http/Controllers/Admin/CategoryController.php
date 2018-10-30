<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $list = Category::all();

         return view('category.viewlist', ['listcategory'=>$list]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $categories = Category::create($inputs);
        Session::flash('success','Thêm danh mục thành công');

        return redirect('admin/category');
}

    public function edit($id)
    {
        $cate = Category::findOrFail($id);

        return view('category.editcate', ['cate' => $cate]);
    }


    public function update(Request $request, $id)
    {
        $cate = Category::findOrFail($id);
        $inputs = $request->all();
        $cate->update($inputs);
        Session::flash('success','sua danh mục thành công');

       return redirect('admin/category');
    }

    public function destroy($id)
    {
        $cate = Category::destroy($id);
        Session::flash('success','xoa danh mục thành công');

        return redirect('admin/category');
    }
}
