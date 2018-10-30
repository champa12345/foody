<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Group;
use Session;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $list = User::where('id','>',0);
        if($request->has('keyword')){
            $keyword = $request->keyword;
            $list = $list->where('name','like','%'.$keyword.'%');
        }
        $list = $list->orderBy('id','ASC')->get();

        return view('user.viewuser',['list'=>$list]);
    }

    public function create()
    {
        //
        $group = Group::pluck('name');
        return view('user.createuser',['group'=>$group]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required|max:255',
           'email'=>'required|email|unique:users',
           'password'=>'required|min:6',
        ]);
        $u = new User();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = bcrypt($request->password);
        $u->address = $request->address;
        $u->phone = $request->phone;
        $u->group_id = $request->group_id+1;
        $u->save();
        Session::flash('success','Thêm người dùng thành công');
        return redirect('admin/user');
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
        $user = User::findOrFail($id);
        $group = Group::pluck('name','id');
        return view('user.edituser',['user'=>$user,'group'=>$group]);
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
        $u = User::findOrFail($id);
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|email',
        ]);
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = $request->password;
        $u->address = $request->address;
        $u->phone = $request->phone;
        $u->group_id = $request->group_id;
        $u->save();
        Session::flash('success','Cập nhật người dùng thành công');
        return redirect('admin/user');
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
        $u = User::findOrFail($id);
        $u->Delete();
        Session::flash('success','Xóa người dùng thành công');
        return redirect('admin/user');
    }
}
