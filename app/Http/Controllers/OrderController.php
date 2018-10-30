<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use ShoppingCart;
use Session;
use App\OrderDetail;
class OrderController extends Controller
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

        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255'
        ]);
        //luu vao bang order
        if(ShoppingCart::total()>0){
            $tong = 0;
            foreach (ShoppingCart::all() as $item) {
                $order = new Order();
                $order->name = $request->name;
                $order->email = $request->email;
                $order->address = $request->address;
                $order->phone = $request->phone;
//                $order->total += $item->total -($item->total*$item->discount/100);
                $tong = $tong + $item->total -($item->total*$item->discount/100);
//                $order->save();
            }
            $order->total = $tong;
            $order->save();
            //luu vao bang orderdetails
            foreach (ShoppingCart::all() as $item){
                $orderdetail = new OrderDetail();
                $orderdetail->product_id = $item->id;
                $orderdetail->order_id = $order->id;
                $orderdetail->quantity = $item->qty;
                $orderdetail->price = $item->price;
                $orderdetail->amount = $item->total -($item->total*$item->discount/100);
                $orderdetail->discount = $item->discount;
                $orderdetail->save();
            }
            ShoppingCart::destroy();
            Session::flash('add_cart','Đã đặt hàng thành công !!!');
        } else{
            Session::flash('error_cart','Mời bạn chọn sản phẩm để đặt hàng');
        }


        return redirect('cart');
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
}
