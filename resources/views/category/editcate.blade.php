@extends('layouts.admin')
@section('title') Admin | Category | Edit @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"><a href="{{ url('admin/category') }}" title="Go to Brand" class="tip-bottom"><i
                        class="fas fa-clipboard-list"></i> Danh mục</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12" >
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sửa danh mục : {{ $cate->name }}</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($cate,['method'=>'PATCH','url'=>['admin/category/'.$cate->id],'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Tên:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['id'=>'txtName','class'=>'span10']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Trạng thái:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::select('status',[0=>'Ẩn',1=>'Hiển thị'],null,['id'=>'txtStatus','class'=>'span10']) !!}
                            {!! $errors->first('status','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-actions">
                        {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
