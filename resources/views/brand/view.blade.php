@extends('layouts.admin')
@section('title')
    Admin | Brand
@endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"><a href="{{ url('admin/brand') }}" title="Go to Brand" class="tip-bottom"><i
                        class="fas fa-clipboard-list"></i> Brand</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                @if(Session::has('error'))
                    <p style="color: red;">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p style="color: green;">{{ Session::get('success') }}</p>
                @endif
                <a href="{{ url('admin/brand/create') }}">
                    <button class="icon-plus btn btn-success"> Thêm mới</button>
                </a>
                <br><br>
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Brand table</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($brand))
                            @foreach($brand as $item)
                                <tr class="even gradeC">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    @if($item->status==0)
                                        <td>Ẩn</td>
                                    @else
                                        <td>Hiển thị</td>
                                    @endif
                                    <td>
                                        <a href="{{ url('admin/brand/'.$item->id.'/edit') }}">
                                            <button class="icon-edit btn btn-warning" style="width: 77px; float: left">
                                                Edit
                                            </button>
                                        </a>
                                        {!! Form::open(['method'=>'DELETE','url'=>['admin/brand',$item->id]]) !!}
                                        <button type="submit" class="icon-remove btn btn-danger"
                                                onclick="return confirm('Are you sure?');"> Delete
                                        </button>
                                        {!! Form::close() !!}
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