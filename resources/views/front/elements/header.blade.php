<div style="display: none;">
    <div id="message-success">@if(Session::has('add_cart')) {{ Session::get('add_cart') }} @endif</div>
    <div id="message-error">@if(Session::has('error_cart')) {{ Session::get('error_cart') }} @endif</div>
    <div id="message-contact">@if(Session::has('contact')) {{ Session::get('contact') }} @endif</div>
    <div id="message-thanhcong">@if(Session::has('success')) {{ Session::get('success') }} @endif</div>
</div>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +84 979 496 731</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> eshop@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://mail.google.com"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ url('/Home') }}"><img src="{{ asset('img') }}/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Việt Nam
                                <span class="caret"></span>
                            </button>
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">USA</a></li>--}}
                            {{--</ul>--}}
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                VNĐ
                                <span class="caret"></span>
                            </button>
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Dollar</a></li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if(Auth::check())
                                <li><a href="{{ url('/account') }}"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="{{ url('changePassword') }}"><i class="fa fa-user"></i> Thay đổi mật khẩu</a></li>
                            @endif
                            <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            @if(!Auth::check())
                                <li><a href="{{ url('/dangnhap') }}"><i class="fa fa-lock"></i> Đăng nhập/Đăng ký</a></li>
                            @else
                                <li>
                                    <a href="{{ url('home') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Đăng xuất
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ url('/Home') }}" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="{{ url('product') }}">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ url('product') }}">Sản phẩm</a></li>
                                    <li><a href="{{ url('cart') }}">Giỏ hàng</a></li>
                                    <li><a href="{{ url('/dangnhap') }}">Đăng nhập/Đăng ký</a></li>
                                    <li>
                                        <a href="{{ url('home') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="icon-key"></i> Đăng xuất
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('news') }}">Tin tức</a></li>
                            <li><a href="{{ url('contact') }}">Liên hệ</a></li>
                            @if(Auth::check() && (Auth::user()->group_id==1||Auth::user()->group_id==3))
                                <li><a href="{{ url('admin') }}">Quản lý</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        {!! Form::open(['method'=>'GET','url'=>'search']) !!}
                           {!! Form::text('search',null,['placeholder'=>'Tìm kiếm']) !!}
                            {{--<input type="text" placeholder="Tìm kiếm" name="search"/>--}}
                            {{--<input type="submit" value="Search" class="">--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->