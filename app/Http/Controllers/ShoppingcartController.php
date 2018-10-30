<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ShoppingCart;
use Session;
class ShoppingcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.cart');
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
        if ($request->quantity==(integer)$request->quantity && $request->quantity>0){
            $id = $request->id;
            $name = $request->name;
            $discount = $request->discount;
            $price = $request->price;
            $thumbnail = $request->thumbnail;
            $quantity = $request->quantity;
            ShoppingCart::add($id,$name,$quantity,$price,['thumbnail'=>$thumbnail,'discount'=>$discount]);
            Session::flash('add_cart',"Đã thêm sản phẩm vào giỏ hàng");

        }
        else {
            $id = $request->id;
            Session::flash('error_cart',"Số lượng sản phẩm không hợp lệ");
        }

        return redirect('/product/'.$id);
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
        if ($request->qty>0 && $request->qty==(integer)$request->qty){
            foreach (ShoppingCart::all() as $item){
                if($item->id==$id){
                    ShoppingCart::update($item->__raw_id,['qty'=>$request->qty]);
                    break;
                }
            }
            Session::flash('add_cart',"Cập nhật giỏ hàng thành công");
        } else{
            Session::flash('error_cart',"Số lượng sản phẩm không hợp lệ");
        }

        return redirect('cart');
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
        foreach (ShoppingCart::all() as $item){
            if ($item->id==$id){
                ShoppingCart::remove($item->__raw_id);
                break;
            }
        }
        Session::flash('add_cart',"Xóa sản phẩm khỏi giỏ hàng thành công");
        return redirect('cart');
    }
}
