@extends('front.master')
@section('title')
    News
@endsection
@section('content')
    @if(isset($news))
    <div class="container">
        <div class="row">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li class="active"><a href="{{ url('news') }}">News</a></li>
                    <li style="font-size: 13px; color: black; font-weight: bold">{{ $news->title }}</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 no-padding-right">
                <div class="col-main">
                    <div id="messages_product_view"></div>
                    <div class="postWrapper" itemprop="blogPost" itemscope="" itemtype="http://schema.org/BlogPosting">
                        <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage">
                        <div class="page-title">
                            <h1 itemprop="headline" style="font-family: Roboto Condensed, sans-serif;font-size: 28px;    text-transform: uppercase;color: #000;">{{ $news->title }}</h1>
                            <h3>{{ $news->date }}</h3>
                        </div>
                        <div style="display:none" itemtype="http://schema.org/Organization" itemscope="" itemprop="publisher">
                            <meta itemprop="name" content="">
                            <div style="display:none" itemtype="http://schema.org/ImageObject" itemscope="" itemprop="logo">
                                <meta itemprop="url" content="">
                            </div>
                        </div>

                        {{--<div style="display:none" class="postImage" itemtype="http://schema.org/ImageObject" itemscope="" itemprop="image">--}}
                            {{--<img src="https://hoang-phuc.com/media/fontis_blog/posts/201802/tet2018gd3-565x424.png" alt="" class="img-responsive" itemprop="url">--}}
                            {{--<meta itemprop="width" content="565">--}}
                            {{--<meta itemprop="height" content="424">--}}
                        {{--</div>--}}

                        <div class="postContent std" itemprop="articleBody">
                            <p style="text-align: justify; font-family: Roboto, sans-serif; font-size: 13px;">{{ $news->content }}</p>
                            {{--<p style="text-align: justify; font-family: Roboto, sans-serif; font-size: 13px;">Các sản phẩm từ 9 thương hiệu thời trang quốc tế được Hoàng Phúc độc quyền phân phối tại Việt Nam như: Dr. Martens, Kappa, Clarks, Ecko Unltd, Superga, Replay, Sisley, United Colors Of Benetton, Staple Pigeon đều tham gia tại chương trình này cho cả hàng mới và hàng đã được giảm giá trước đó.</p>--}}
                            {{--<p style="text-align: justify; font-family: Roboto, sans-serif; font-size: 13px;">*Lưu ý: Một số sản phẩm Dr. Martens được giảm 30% tại chương trình.</p>--}}
                            {{--<p style="text-align: justify; font-family: Roboto, sans-serif; font-size: 13px;">Chương trình diễn ra từ 01.02– 15.02.2018, áp dụng cho hệ thống cửa hàng Hoàng Phúc toàn quốc và mua hàng online. ĐẶC BIỆT, miễn phí vận chuyển cho tất cả đơn hàng tại đợt sale lần này.</p>--}}
                            {{--<p style="text-align: justify; font-family: Roboto, sans-serif; font-size: 13px;">Đặc biệt, với mỗi hoá đơn từ 1 triệu đồng khách hàng sẽ được tặng kèm 1 xấp bao lì xì cho năm mới.</p>--}}
                            {{--<p style="text-align: justify; font-family: Roboto, sans-serif; font-size: 13px;">Xem sản phẩm được bán online <a href="https://hoang-phuc.com/khuyen-mai?order=position">tại đây</a> hoặc tìm cửa hàng gần nhất <a href="https://hoang-phuc.com/he-thong-cua-hang">tại đây</a>.</p>--}}
                            <p style="text-align: center; width: 100%; font-family: Roboto, sans-serif; font-size: 13px;"><img alt="" src="{{ asset('uploads/news/'.$news->thumbnail) }}" width="100%"></p></div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 event-sharing pull-right">
                                <div class="flex-container-justify">
                                    <span class="text-uppercase">Share</span>
                                    <a href="http://www.facebook.com/sharer.php?u={{ url('news/'.$news->id) }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/share?url={{ url('news/'.$news->id) }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://plus.google.com/share?url={{ url('news/'.$news->id) }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site {{ url('news/'.$news->id) }}" target="_blank"><i class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
                                <a href="{{ url('news') }}" class="btn btn-lg btn-main btn-block text-none" type="button">&lt; Quay lại trang tin tức </a>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="col-right sidebar">
                    <div class="panel panel-default no-radus">
                        <div class="panel-heading">
                            <h3 class="text-uppercase">Bài viết mới nhất</h3>
                        </div>
                        <div class="panel-body">
                            <!-- Media list -->

                            @if(isset($listnews))
                                @foreach($listnews as $value)
                                    <div class="media">
                                        <div class="media-left hp-media-left">
                                            <a href="{{ url('news/'.$value->id) }}">
                                                <img class="media-object" src="{{ asset('uploads/news/'.$value->thumbnail) }}" width="100px" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-uppercase" >
                                                <a href="{{ url('news/'.$value->id) }}" style="color: black; font-size: 12px">{{ $value->title }}</a>
                                            </h4>
                                            <meta itemprop="datePublished" >
                                            <p>{{ $value->date }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
@endsection