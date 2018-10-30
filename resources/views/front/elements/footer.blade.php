<footer id="footer"><!--Footer-->
    {{--<div class="footer-top">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-2">--}}
                    {{--<div class="companyinfo">--}}
                        {{--<h2><span>e</span>-shopper</h2>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-7">--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="video-gallery text-center">--}}
                            {{--<a href="#">--}}
                                {{--<div class="iframe-img">--}}
                                    {{--<img src="{{ asset('img') }}/home/iframe1.png" alt="" />--}}
                                {{--</div>--}}
                                {{--<div class="overlay-icon">--}}
                                    {{--<i class="fa fa-play-circle-o"></i>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<p>Circle of Hands</p>--}}
                            {{--<h2>24 DEC 2014</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-3">--}}
                        {{--<div class="video-gallery text-center">--}}
                            {{--<a href="#">--}}
                                {{--<div class="iframe-img">--}}
                                    {{--<img src="{{ asset('img') }}/home/iframe2.png" alt="" />--}}
                                {{--</div>--}}
                                {{--<div class="overlay-icon">--}}
                                    {{--<i class="fa fa-play-circle-o"></i>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<p>Circle of Hands</p>--}}
                            {{--<h2>24 DEC 2014</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-3">--}}
                        {{--<div class="video-gallery text-center">--}}
                            {{--<a href="#">--}}
                                {{--<div class="iframe-img">--}}
                                    {{--<img src="{{ asset('img') }}/home/iframe3.png" alt="" />--}}
                                {{--</div>--}}
                                {{--<div class="overlay-icon">--}}
                                    {{--<i class="fa fa-play-circle-o"></i>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<p>Circle of Hands</p>--}}
                            {{--<h2>24 DEC 2014</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-sm-3">--}}
                        {{--<div class="video-gallery text-center">--}}
                            {{--<a href="#">--}}
                                {{--<div class="iframe-img">--}}
                                    {{--<img src="{{ asset('img') }}/home/iframe4.png" alt="" />--}}
                                {{--</div>--}}
                                {{--<div class="overlay-icon">--}}
                                    {{--<i class="fa fa-play-circle-o"></i>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<p>Circle of Hands</p>--}}
                            {{--<h2>24 DEC 2014</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3">--}}
                    {{--<div class="address">--}}
                        {{--<img src="{{ asset('img') }}/home/map.png" alt="" />--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Dịch vụ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Hỗ trợ trực tuyến</a></li>
                            <li><a href="{{ url('contact') }}">Liên hệ</a></li>
                            {{--<li><a href="#">Order Status</a></li>--}}
                            {{--<li><a href="#">Change Location</a></li>--}}
                            {{--<li><a href="#">FAQ’s</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Cửa hàng</h2>
                        <ul class="nav nav-pills nav-stacked">
                            @if(isset($cate))
                                @foreach($cate as $item)
                                    <li><a href="{{ url('category/'.$item->id) }}">{{ $item->name }}</a></li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Chính sách</h2>
                        <ul class="nav nav-pills nav-stacked">
                            {{--<li><a href="#">Terms of Use</a></li>--}}
                            <li><a href="#">Bảo mật</a></li>
                            {{--<li><a href="#">Refund Policy</a></li>--}}
                            <li><a href="#">Hệ thống giao hàng</a></li>
                            <li><a href="#">Hệ thống vé</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Giới thiệu cửa hàng</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Thông tin công ty</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                            <li><a href="{{ url('contact') }}">Địa chỉ cửa hàng</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                {{--<div class="col-sm-3 col-sm-offset-1">--}}
                    {{--<div class="single-widget">--}}
                        {{--<h2>About Shopper</h2>--}}
                        {{--<form action="#" class="searchform">--}}
                            {{--<input type="text" placeholder="Your email address" />--}}
                            {{--<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>--}}
                            {{--<p>Get the most recent updates from <br />our site and be updated your self...</p>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->