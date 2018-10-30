<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use Session;
class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Group::all();
        return view('group.viewgroup',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('group.creategroup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required|max:255'
        ]);

        $g = new Group();
        $g->name = $request->name;
        $g->save();
        Session::flash('success','Thêm Group thành công');
        return redirect('admin/group');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $group = Group::findOrFail($id);
        return view('group.editgroup',['group'=>$group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $g = Group::findOrFail($id);
        $this->validate($request,[
            'name'=>'required|max:255'
        ]);


        $g->name = $request->name;
        $g->save();
        Session::flash('success','Cập nhật Group thành công');
        return redirect('admin/group');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $check = User::where('group_id',$id)->count();
        if($check>0){
            Session::flash('error',"Bạn không thể xóa Group này!!!");
        }
        else {
            $group = Group::findOrFail($id);
            $group->delete();
            Session::flash('success',"Xóa thành công");
        }

        return redirect('admin/group');
    }
}
