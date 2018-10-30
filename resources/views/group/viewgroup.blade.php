@extends('layouts.admin')
@section('title') Admin | Group @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/group') }}" title="Go to Group" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Group</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                @if(Session::has('error'))
                    <p style="color: red">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p style="color: green;" >{{ Session::get('success') }}</p>
                @endif
                <a href="{{ url('admin/group/create') }} ">
                    <button class="icon-plus btn btn-success"> Thêm mới</button>
                </a>
                <br><br>
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Group table</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($list))
                            @foreach($list as $key => $item)
                                <tr class="even gradeC">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>

                                        <a href="{{ url('admin/group/'.$item->id.'/edit') }}">
                                            <button class="icon-edit btn btn-warning" style="width: 77px; float: left"> Edit </button>
                                        </a>
                                        {!! Form::open(['method'=>'DELETE','url'=>['admin/group',$item->id]]) !!}
                                        <button type="submit" class="icon-remove btn btn-danger" onclick="return confirm('Are you sure?');"> Delete</button>
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