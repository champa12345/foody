@extends('front.master')
@section('title') Thay đổi mật khẩu @endsection
@section('content')
    {{--<h2>thay đổi apply HTML template cho phù hợp</h2>--}}
    {{--<h2>bắt lỗi bắt buộc phải nhập, và xác nhận mật khẩu phải trùng với mật khẩu mới</h2>--}}
    <section id="form">
        <div class="container">
            <div class="login-form">
                {!! Form::open(['method' => 'POST', 'url' => 'changePassword'])  !!}
                <div class="col-sm-10">
                    <div class="col-sm-4">
                        Mật Khẩu Cũ:
                    </div>
                    <div class="col-sm-6">
                        {!!  Form::password('old_password', null, ['placeholder'=>'Mật khẩu cũ','required'=>true])  !!}
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-4">
                        Mật khẩu mới:
                    </div>
                    <div class="col-sm-6">
                        {!!  Form::password('new_password', null, ['placeholder'=>'Mật khẩu mới','required'=>true])  !!}
                    </div>

                </div>
                <div class="col-sm-10">
                    <div class="col-sm-4">
                        Xác Nhận mật khẩu mới:
                    </div>
                    <div class="col-sm-6">
                        {!!  Form::password('confirm_password', null, ['required'=>true])  !!}
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-default">Cập nhật</button>
                    </div>
                </div>

                {{--<p>{{ Form::submit('Update') }}</p>--}}
                {!!  Form::close()  !!}
            </div>
        </div>
    </section>

@endsection