@extends('layouts.admin')
@section('title') Admin | Product | Create @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/product') }}" title="Go to Product" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Sản phẩm</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12" >
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Thêm mới sản phẩm</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['url'=>'admin/product', 'method'=>'post', 'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Tên:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['class'=>'span10','placeholder'=>'Tên']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Giá:',null,['class'=>'control-label']) !!}
                            <div class="controls">
                                {!! Form::number('price',null,['class'=>'span10','placeholder'=>'Giá']) !!}
                                {!! $errors->first('price','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('.Ảnh đại diện:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::file('thumbnail',null,['class'=>'span10']) !!}
                            {!! $errors->first('thumbnail','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    {{--ảnh chi tiết sản phẩm--}}
                    <div class="control-group">
                        {!! Form::label('.Ảnh sản phẩm:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::file('image[]',['multiple'=>'multiple','class'=>'span10']) !!}
                            {!! $errors->first('image','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    {{----}}
                    <div class="control-group">
                        {!! Form::label('Giảm giá:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::number('discount',null,['class'=>'span10','placeholder'=>'Giảm giá']) !!}
                            {!! $errors->first('discount','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Danh mục:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::select('category_id',$cate,null,['class'=>'span10']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Thương hiệu:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::select('brand_id',$brand,null,['class'=>'span10']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Mô tả:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::textarea('description',null,['class'=>'span10','placeholder'=>'Mô tả']) !!}
                            {!! $errors->first('description','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Trạng thái:',null,['class'=>'control-label']) !!}
                        <div class="controls">
{{--                            {!! Form::number('status',null,['class'=>'span10','placeholder'=>'1']) !!}--}}
                            {!! Form::select('status',[0=>'Ẩn',1=>'Hiển thị'],['class'=>'span10']) !!}
                            {!! $errors->first('status','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-actions">
                        {!! Form::submit('Thêm',['class'=>'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
