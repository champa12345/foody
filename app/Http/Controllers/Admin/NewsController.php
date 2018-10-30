<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreRequest;
use App\Http\Requests\Admin\News\UpdateRequest;
use App\News;
use Illuminate\Support\Facades\App;
use Session;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
       $list = News::all();
       return view('news.view',['list'=>$list]);
    }

    public function create()
    {
        //
        return view('news.createnews');
    }


    public function store(StoreRequest $request)
    {
        $inputs = $request->all();
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move('uploads/news', $filename);
            $inputs['thumbnail'] = $filename;
        }
        $news = News::create($inputs);

        Session::flash('success','Thêm tin tức thành công');
        return redirect('admin/news');
    }

    public function edit($id)
    {
        //
        $news = News::findOrFail($id);
        return view('news.editnews',['news'=>$news]);
    }

    public function update(UpdateRequest $request, $id)
    {

        $new = News::findOrFail($id);
        $inputs = $request->all();
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move('uploads/news', $filename);
            $inputs['thumbnail'] = $filename;
        }

        $new->update($inputs);

        Session::flash('success','Cập nhật tin tức thành công');
        return redirect('admin/news');
    }

    public function destroy($id)
    {

        $n = News::destroy($id);
        Session::flash('success','Xóa tin tức thành công');

        return redirect('admin/news');
    }
}
