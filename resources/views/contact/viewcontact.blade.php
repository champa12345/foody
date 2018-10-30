@extends('layouts.admin')
@section('title') Admin | Contact @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/contact') }}" title="Go to Contact" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Contact</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <a href="{{ url('admin/contact/create') }}">
                    <button class="icon-plus btn btn-success"> Thêm mới</button>
                </a>
                <br><br>
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Danh sách liên hệ</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Nội dung</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(isset($contact))
                                @foreach($contact as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>
                                            {!! Form::open(['url'=>['admin/contact',$item->id],'method'=>'DELETE']) !!}
                                                <button type="submit" class="icon-remove btn btn-danger" onclick="return confirm('Are you sure?');"> Xóa</button>
                                            {!! Form::Close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection