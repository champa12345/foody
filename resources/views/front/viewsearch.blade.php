@extends('front.master')
@section('title')
    Search
@endsection
@section('leftsidebar')
    @include('front.elements.leftsidebar')
@endsection
@section('content')
    <div>
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Products</h2>
                @if(isset($listproduct))
                    @if(count($listproduct)==0)
                     <p>Không có sản phẩm nào</p>
                    @else
                    @foreach($listproduct as $item)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('uploads/product/'.$item->thumbnail) }}" style="width: 184px; height: 162px;" alt="">
                                        @if($item->discount!=0)
                                            <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($item->price) }} </span> {{ number_format($item->price-($item->price*$item-> discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                        @else
                                            <h2 style="font-size: 15px;">{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                        @endif
                                        <p>{{ $item->name }}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    @if($item->discount!=0)
                                        <img src="{{ asset('img/home/sale.png') }}" class="new" alt="">
                                    @endif
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            @if($item->discount!=0)
                                                <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($item->price) }} </span> {{ number_format($item->price-($item->price*$item-> discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                            @else
                                                <h2 style="font-size: 15px;">{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                            @endif
                                            <p>{{ $item->name }}</p>
                                            <a href="{{ url('product/'.$item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product Detail</a>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="choose">--}}
                                    {{--<ul class="nav nav-pills nav-justified">--}}
                                        {{--<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>--}}
                                        {{--<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    @endforeach
                    @endif
                @endif


            </div><!--features_items-->

        </div>
        {{ $listproduct->links() }}
    </div>
@endsection
