@extends('layouts.admin')
@section('title') Admin | Product | Edit @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/product') }}" title="Go to Product" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Sản phẩm</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Sửa sản phẩm : {{ $product->name }}</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($product,['url'=>['admin/product/'.$product->id], 'method'=>'PATCH', 'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Tên:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['class'=>'span10','placeholder'=>'Name']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Giá:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::number('price',null,['class'=>'span10','placeholder'=>100.000]) !!}
                            {!! $errors->first('price','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('.Ảnh đại diện:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::file('thumbnail',null,['class'=>'span10']) !!}
                            {!! $errors->first('thumbnail','<p style="color:red;">:message</p>') !!}
                            <br>
                            @if(isset($product))
                                <img src="{{ url('uploads/product/'.$product->thumbnail) }}" width="100px" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Giảm giá:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::number('discount',null,['class'=>'span10','placeholder'=>0]) !!}
                            {!! $errors->first('discount','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Mô tả:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::textarea('description',null,['class'=>'span10']) !!}
                            {!! $errors->first('description','<p style="color:red;">:message</p>') !!}
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
                        {!! Form::label('Trạng thái:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::select('status',[0=>'Ẩn',1=>'Hiển thị'],null,['class'=>'span10','placeholder'=>'1']) !!}
                            {!! $errors->first('status','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-actions">
                        {!! Form::submit('Sửa',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
