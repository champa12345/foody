@extends('layouts.admin')
@section('title') Admin | Product @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/product') }}" title="Go to Product" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Sản phẩm</a></div>
    </div>
    <div class="row-fluid">
        <div class="widget-box">
            @if(Session::has('error'))
                <p style="color: red;">{{ Session::get('error') }}</p>
            @endif
            @if(Session::has('success'))
                <p style="color: green;">{{ Session::get('success') }}</p>
            @endif
            <a href="{{ url('admin/product/create') }}">
                <button class="icon-plus btn btn-success"> Thêm mới</button>
            </a>
            <br><br>
            {!! Form::open(['method'=>'GET','url'=>'admin/product']) !!}
                {!! Form::text('keyword',null,['class'=>'span3 form-control','id'=>'txtKey','placeholder'=>'Tìm kiếm theo tên']) !!}
                {!! Form::submit('Tìm kiếm',['class'=>'btn btn-info']) !!}
            {!! Form::close() !!}
            <br>
            <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                <h5>Danh sách Sản phẩm</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Giảm giá</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($listproduct))
                        @foreach($listproduct as $key => $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ number_format($item->price) }}</td>
                                <td>
                                    <img src="{{ url('uploads/product/'. $item->thumbnail ) }}" width="100px" alt="">
                                </td>
                                <td>{{ $item->discount }}</td>
                              {{--   <td>{{ $item->category->name }}</td> --}}
                                <td>{{ $item->brand->name }}</td>
                                <td>{{ $item->description }}</td>
                                @if($item->status==0)
                                    <td>Ẩn</td>
                                @elseif($item->status==1)
                                    <td>Hiển thị</td>
                                @endif
                                <td>
                                    <a href="{{ url('admin/product/'.$item->id.'/edit') }}">
                                        <button class="icon-edit btn btn-warning" style="width: 77px; float: left"> Sửa</button>
                                    </a>
                                    {!! Form::open(['method'=>'DELETE','url'=>['admin/product',$item->id]]) !!}
                                    <button style="width: 77px;" type="submit" class="icon-remove btn btn-danger" onclick="return confirm('Are you sure?');">
                                        Xóa
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                        @endforeach
                    @endif

                    </tbody>

                </table>
            </div>
                {{ $listproduct->links() }}
        </div>
    </div>
@endsection

