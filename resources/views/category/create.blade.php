@extends('layouts.admin');
@section('title') Admin | Category | Create @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"><a href="{{ url('admin/brand') }}" title="Go to Category" class="tip-bottom"><i
                        class="fas fa-clipboard-list"></i> Danh mục</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm mới Danh mục</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['url'=>'admin/category', 'method'=>'POST', 'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Tên:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['class'=>'span10','placeholder'=>'Tên']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
                        </div>
                        <div class="form-actions">
                            {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection



