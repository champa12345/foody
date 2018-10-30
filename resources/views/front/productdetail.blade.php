@extends('front.master')
@section('title') Product details @endsection
@section('leftsidebar')
    @include('front.elements.leftsidebar')
@endsection
@section('content')
    <div class="container">
        @if(isset($item))
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product" id="thumbmain">
                                <img src="{{ url('uploads/product/'.$item->thumbnail) }}" width="320px" height="380px" alt=""
                                     data-zoom-image="{{ url('uploads/product/'.$item->thumbnail) }}" id="zoom1"
                                >
                                {{--<h3>ZOOM</h3>--}}
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active" id="thumbs">
                                        @foreach($item->image as $key => $image)
                                            @if($key > 1 && $key % 3 == 0)
                                                </div><div class="item ">
                                            @endif
                                            <a href="{{ url('uploads/product/detail/'.$image->name) }}"><img src="{{ url('uploads/product/detail/'.$image->name) }}" alt="" style="width: 85px; height: 85px; cursor: pointer;"></a>
                                        @endforeach
                                    </div>
                                </div>
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information" style="width: 475px !important; height: 381px;">
                                <img src="images/product-details/new.jpg" class="newarrival" alt="">
                                <h2>{{ $item->name }}</h2>
                                @if($item->discount!=0)
                                    <img src="{{ asset('img/home/sale.png') }}" class="new" alt="">
                                    <p>-{{ $item->discount }}%</p>
                                    <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($item->price) }} </span> <sup style="text-decoration: underline;">đ</sup></h2>
                                @endif
                                    <span style="width: 100%">
                                        <span>{{ number_format($item->price-($item->price*$item->discount/100)) }} <sup>đ</sup>
                                        </span>
                                    {!! Form::open(['method'=>'POST','url'=>'cart']) !!}
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="hidden" name="name" value="{{ $item->name }}">
                                        <input type="hidden" name="discount" value="{{ $item->discount }}">
                                        <input type="hidden" name="price" value="{{ $item->price }}">
                                        <input type="hidden" name="thumbnail" value="{{ $item->thumbnail }}">
                                        <label>Quantity:</label>
                                        <input type="text" name="quantity" value="1">
                                        <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Đặt mua
                                        </button>
                                    {!! Form::close() !!}

								</span>
                                @if($item->status==1)
                                    <p><b>Trạng thái: </b> Còn hàng</p>
                                @else
                                    <p><b>Trạng thái: </b> Hết hàng</p>
                                @endif
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Thông tin sản phẩm</a></li>
                                {{--<li><a href="#tag" data-toggle="tab">Tag</a></li>--}}
                                <li><a href="#reviews" data-toggle="tab">Bình luận({{ $count }})</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details">
                                <div class="col-sm-12" style="margin-left: 10px;">
                                    <p>{{ $item->description }}</p>
                                    <p><b>Danh mục: </b><a href="{{ url('category/'.$item->category_id) }}">{{ $item->category->name }}</a></p>
                                    <p><b>Thương hiệu: </b> {{ $item->brand->name }}</p>
                                    @if($item->discount!=0)
                                        <p><b>Khuyến mãi: </b> Giảm giá {{ $item->discount }}%</p>
                                    @endif
                                    @if($item->status==1)
                                        <p><b>Trạng thái: </b> Còn hàng</p>
                                    @else
                                        <p><b>Trạng thái: </b> Hết hàng</p>
                                    @endif
                                    <p><b>Vận chuyển từ: </b> Hà Đông, Hà Nội</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews">
                                <div class="col-sm-12">
                                    <div id="comment-content" class="comment">
                                        @include('front.product_comment')
                                    </div>
                                    <p><b>Để lại đánh giá của bạn về sản phẩm:</b></p>

                                    {!! Form::open(['method'=>'POST','url'=>'comment']) !!}
                                        <input type="hidden" name="name" value="@if(Auth::check()) {{ Auth::user()->name }} @endif">
                                        <input type="hidden" name="email" value="@if(Auth::check()) {{ Auth::user()->email }} @endif">
                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                        {!! Form::textarea('comment',null,['placeholder'=>'Vui lòng để lại bình luận ...']) !!}
                                        {!! Form::submit('Bình luận',['class'=>'btn btn-default pull-right']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div><!--/category-tab-->

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">Sản phẩm liên quan</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @if(isset($productrecommend))
                                    <div class="item active">
                                        @foreach($productrecommend as $k => $prod)
                                            @if($k > 1 && $k % 3 == 0)
                                                 </div><div class="item ">
                                            @endif
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{ url('uploads/product/'.$prod->thumbnail) }}" style="width: 255px; height: 290px;" alt="">
                                                        @if($prod->discount!=0)
                                                            <img src="{{ url('img/home/sale.png') }}" style="width: 48px;" class="new" alt="">
                                                            <h2 style="font-size: 15px;"><span style="text-decoration: line-through;">{{ number_format($prod->price) }} </span> {{ number_format($prod->price-($prod->price*$prod->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                        @else
                                                            <h2 style="font-size: 15px;">{{ number_format($prod->price-($prod->price*$prod->discount/100)) }} <sup style="text-decoration: underline;">đ</sup></h2>
                                                        @endif
                                                        <p>{{ $prod->name }}</p>
                                                        <a href="{{ url('product/'.$prod->id) }}"><button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button></a>
                                                        @if($prod->discount!=0)
                                                            <img src="{{ asset('img/home/sale.png') }}" style="width: 50px;" class="new" alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                @endif
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
            @endif
    </div>

@endsection
