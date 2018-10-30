@extends('front.master')
@section('title') Home | Ban hang thoi trang @endsection
@section('slide')
    @include('front.elements.slide')
@endsection
@section('leftsidebar')
    @include('front.elements.leftsidebar')
@endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản phẩm nổi bật</h2>
            @if(isset($product))
                <?php $c = 0;?>
                @foreach($product as $item)
                    @if($c<15)
                        <?php $c++?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset('uploads/product/'.$item->thumbnail) }}"
                                             style="width: 184px; height: 162px;" alt=""/>
                                        @if($item->discount!=0)
                                            <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($item->price) }} </span> {{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                        @else
                                            <h2 style="font-size: 15px;">{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                        @endif
                                        <p>{{ $item->name }}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            @if($item->discount!=0)
                                                <h2 style="text-decoration: line-through;">{{ number_format($item->price) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                <h2>{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                            @else
                                                <h2>{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                            @endif
                                            <p>{{ $item->name }}</p>
                                            <a href="{{ url('product/'.$item->id) }}"
                                               class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    @if($item->discount!=0)
                                        <img src="{{ asset('img/home/sale.png') }}" class="new" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif

        </div><!--features_items-->

        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    @if(isset($cate))
                        @foreach($cate as $key => $item)
                            @if($key==0)
                                <li class="active"><a href="#{{ $item->name }}" data-toggle="tab">{{ $item->name }}</a>
                                </li>
                            @elseif($key!=0)
                                <li><a href="#{{ $item->name }}" data-toggle="tab">{{ $item->name }}</a></li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="tab-content">
                @if(isset($cate)&&isset($product))
                    @foreach($cate as $key => $item)
                        <?php $count = 0;?>
                        <div class="tab-pane @if($key == 0) active @endif fade in" id="{{ $item->name }}">
                            @foreach($product as $value)
                                @if(($item->id == $value->category_id) && $count<4)
                                    <?php $count++?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ asset('uploads/product/'.$value->thumbnail) }} "
                                                         style="width: 184px; height: 162px;" alt=""/>
                                                    @if($value->discount!=0)
                                                        <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($value->price) }} </span> {{ number_format($value->price-($value->price*$value->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                    @else
                                                        <h2 style="font-size: 15px;">{{ number_format($value->price-($value->price*$value->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                    @endif
                                                    <p>{{ $value->name }}</p>
                                                    <a href="{{ url('product/'.$value->id) }}"
                                                       class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                                @if($value->discount!=0)
                                                    <img src="{{ asset('img/home/sale.png') }}" class="new" alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                @endif

            </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Sản phẩm gợi ý</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        @if(isset($prod))
                            <?php $p = 0;?>
                            @foreach($prod as $key => $item)
                                <?php $p++?>
                                @if($p<16)
                                    @if($key > 1 && $key % 3 == 0)
                                    </div>
                                    <div class="item ">
                                @endif
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ url('uploads/product/'.$item->thumbnail) }}"
                                                         style="width: 240px; height: 240px;" alt=""/>
                                                    @if($item->discount!=0)
                                                        <img src="{{ url('img/home/sale.png') }}" style="width: 48px;" class="new" alt="">
                                                        <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($item->price) }} </span> {{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                    @else
                                                        <h2 style="font-size: 15px;">{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                    @endif
                                                    <p>{{ $item->name }}</p>
                                                    <a href="{{ url('product/'.$item->id) }}" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->


    </div>

@endsection
