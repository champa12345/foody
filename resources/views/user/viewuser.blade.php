@extends('layouts.admin')
@section('title') Admin | User @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/user') }}" title="Go to User" class="tip-bottom"><i class="fas fa-clipboard-list"></i> User</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <a href="{{ url('admin/user/create') }}">
                    <button class="icon-plus btn btn-success"> Thêm mới</button>
                </a>
                <br><br>
                {!! Form::open(['admin/user','method'=>'GET']) !!}
                {!! Form::text('keyword',null,['class'=>'span3 form-control','id'=>'txtKey','placeholder'=>'Search by name']) !!}
                {!! Form::submit('Search',['class'=>'btn btn-info']) !!}
                {!! Form::Close() !!}
                <br><br>
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>View list User</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Group</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($list))
                            @foreach($list as $key => $item)
                                <tr class="odd gradeX">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->group->name }}</td>
                                    <td>
                                        <a href="{{ url('admin/user/'.$item->id.'/edit') }}">
                                            <button class="icon-edit btn btn-warning" style="width: 77px; float: left"> Edit </button>
                                        </a>

                                        {!! Form::open(['url'=>['admin/user',$item->id],'method'=>'DELETE']) !!}
                                        <button type="submit" class="icon-remove btn btn-danger" onclick="return confirm('Are you sure?');"> Delete</button>
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