@extends('front.master')
@section('title') Account @endsection
@section('content')
    @if(Auth::check())
        <div class="col-sm-9" style="text-align: center;">
            <h1>Tài khoản</h1>
        </div>
        <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <div class="col-sm-9">
                                <div class="col-sm-4">
                                    <h2>Name:</h2>
                                </div>
                                <div class="col-sm-5">
                                    <h2>{{ Auth::user()->name }}</h2>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="col-sm-4">
                                    <h2>Email:</h2>
                                </div>
                                <div class="col-sm-5">
                                    <h2>{{ Auth::user()->email }}</h2>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="col-sm-4">
                                    <h2>Phone:</h2>
                                </div>
                                <div class="col-sm-5">
                                    <h2>{{ Auth::user()->phone }}</h2>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="col-sm-4">
                                    <h2>Address:</h2>
                                </div>
                                <div class="col-sm-5">
                                    <h2>{{ Auth::user()->address }}</h2>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <a href="{{ url('user/'.Auth::user()->id.'/edit') }}">
                                    <button class="btn btn-warning">
                                        Chỉnh sửa thông tin cá nhân
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif(!Auth::check())
        <section id="form"><!--form-->
            <a href="{{ url('/dangnhap') }}">Mời bạn đăng nhập</a>
        </section>
        </div>
    @endif
@endsection