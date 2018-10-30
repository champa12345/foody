@extends('front.master')
@section('title')
    Edit Profile
@endsection
@section('content')
    <div class="col-sm-9" style="text-align: center;">
        <h2>Chỉnh sửa thông tin cá nhân</h2>
    </div>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        {!! Form::model($user,['method'=>'PATCH','url'=>['user/'.$user->id]]) !!}
                        <div class="col-sm-9">
                            <div class="col-sm-4">
                                <h2>Name:</h2>
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('name',null,['required'=>true]) !!}
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="col-sm-4">
                                <h2>Email:</h2>
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('email',null,['required'=>true]) !!}
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="col-sm-4">
                                <h2>Phone:</h2>
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('phone',null) !!}
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="col-sm-4">
                                <h2>Address:</h2>
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('address',null) !!}
                            </div>
                        </div>
                            {!! Form::hidden('password',null) !!}
                            {!! Form::hidden('group_id',null) !!}
                        <div class="col-sm-9">
                            <a href="{{ url('user/'.$user->id) }}">
                                <button class="btn btn-warning">
                                    Chỉnh sửa
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@endsection