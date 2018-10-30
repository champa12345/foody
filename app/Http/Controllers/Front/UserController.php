<?php

namespace App\Http\Controllers\Front;

use App\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::findOrFail($id);
        return view('front.edituser',['user'=>$user]);
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
        Session::flash('add_cart','Chỉnh sửa thông tin cá nhân thành công');
        return redirect('account');
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
    }
    public function changePassword()
    {
        return view('front.changePassword');
    }

    public function savePassword(Request $request){
        if(Hash::check($request->old_password, Auth::user()->password)) {
            $user = User::where('id', Auth::user()->id)->first();
            $user->password = Hash::make(trim($request->new_password));
            $user->save();

            Session::flash('success', "Thay doi mat khau thanh cong");
        } else {
            Session::flash('error', "Mat khau cu khong dung");
        }

        return redirect('changePassword');
    }
}
