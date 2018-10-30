@extends('front.master')
@section('title')
    Liên hệ
@endsection
@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Liện hệ với chúng tôi</h2>
                    <div id="googlemap" class="contact-map" style="width:100%;height:400px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Liên hệ</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        {!! Form::open(['method'=>'POST','url'=>['contact']]) !!}
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Tên">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="phone" class="form-control" required="required" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="address" class="form-control" required="required" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nhập tin nhắn của bạn ở đây"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Thông tin liên hệ</h2>
                        <address>
                            <p>E-Shopper Inc.</p>
                            <p>Km10, Nguyễn Trãi, Hà Đông, Hà Nội</p>
                            <p>Hà Nội </p>
                            <p>Mobile: +84979 496 731</p>
                            <p>Email: eshop@gmail.com</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Mạng xã hội</h2>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://mail.google.com"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection