@extends('layouts.admin')
@section('title') Admin | News @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/news') }}" title="Go to News" class="tip-bottom"><i class="fas fa-clipboard-list"></i> News</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <a href="{{ url('admin/news/create') }}">
                    <button class="icon-plus btn btn-success"> Thêm mới</button>
                </a>
                <br><br>
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>View News</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Content</th>
                            <th>Thumbnail</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @if(isset($list))
                            @foreach($list as $key => $item)
                                <tr class="odd gradeX">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>
                                        <img src="{{ url('uploads/news/'.$item->thumbnail) }}" width="100px" alt="">
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        {{--<a href="{{ url('admin/news/'.$item->id.'/edit) }}">Edit</a>--}}
                                        <a href="{{ url('admin/news/'.$item->id.'/edit') }}">
                                            <button class="icon-edit btn btn-warning" style="width: 77px; float: left"> Edit </button>
                                        </a>
                                        {!! Form::open(['method'=>'DELETE','url'=>['admin/news',$item->id]]) !!}
                                        <button type="submit" class="icon-remove btn btn-danger" onclick="return confirm('Are you sure?');"> Delete</button>
                                        {!! Form::close() !!}
                                        {{--                    <a href="{{ url('admin/news/'.$item->id) }}">Delete</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


