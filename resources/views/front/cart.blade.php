@extends('front.master')
@section('title') Cart @endsection
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Giỏ hàng</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description" style="text-align: center;">Tên sản phẩm</td>
                        <td class="price">Giá</td>
                        <td> Giảm giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $tongtien = 0;
                    ?>
                    @foreach(ShoppingCart::all() as $item)
                        <tr >
                            <td class="cart_product">
                                <a href=""><img src="{{ asset('uploads/product/'.$item->thumbnail) }}" width="110"
                                                height="110" alt=""></a>
                            </td>
                            <td class="cart_description" style="text-align: center">
                                <h4><a href="{{ url('product/'.$item->id) }}">{{ $item->name }}</a></h4>
                            </td>
                            <td class="cart_price">
                                <p>{{ number_format($item->price) }}</p>
                            </td>
                            <td>
                                <p>-{{ $item->discount }}%</p>
                            </td>
                            {!! Form::open(['method'=>'PATCH','url'=>['cart/'.$item->id]]) !!}
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <!-- <a class="cart_quantity_up" href="#"> + </a> -->
                                    <input class="cart_quantity_input" type="text" name="qty"
                                           value="{{ $item->qty }}" autocomplete="off" size="2">
                                    <!-- <a class="cart_quantity_down" href="#"> - </a> -->
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{ number_format($item->total -($item->total*$item->discount/100)) }}</p>
                                <?php
                                $tongtien = $tongtien + $item->total - ($item->total * $item->discount / 100);
                                ?>
                            </td>
                            <td class="">
                                <button type="submit" class="fa fa-edit"></button>
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['method'=>'delete','url'=>['cart/'.$item->id]]) !!}
                                <button type="submit" class="fa fa-close"></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" style="color: #ec8f21; font-size: 23px; text-align: right">Tổng tiền thanh toán:
                            <span><?php echo number_format($tongtien) ?>VNĐ</span>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
            <div class="col-sm-4">
                <div class="pay-form">
                    <h2>Đặt mua giỏ hàng</h2>
                    {!! Form::open(['method'=>'POST','url'=>'order']) !!}
                        <input type="text" placeholder="Tên" name="name" value="@if(Auth::check()) {{ Auth::user()->name }} @endif" required="" >
                        {!! $errors->first('name','<p>:message</p>') !!}
                        <input type="email" placeholder="Email" name="email" value="@if(Auth::check()) {{ Auth::user()->email }} @endif" required="">
                        {!! $errors->first('email','<p>:message</p>') !!}
                        <input type="text" placeholder="Địa chỉ" name="address" value="@if(Auth::check()) {{ Auth::user()->address }} @endif" required="">
                        {!! $errors->first('address','<p>:message</p>') !!}
                        <input type="text" name="phone" placeholder="Số điện thoại" value="@if(Auth::check()) {{ Auth::user()->phone }} @endif" required="">
                        {!! $errors->first('phone','<p style="color:red;">:message</p>') !!}
                        <button type="submit" class="btn btn-default">Đặt mua</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
