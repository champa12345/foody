@extends('layouts.admin')
@section('title') Admin | News | Edit News@endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/news') }}" title="Go to News" class="tip-bottom"><i class="fas fa-clipboard-list"></i> News</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Edit {{ $news->title }}</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($news,['method'=>'PATCH','url'=>['admin/news',$news->id],'files'=>true, 'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Title:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('title',null,['class'=>'span10','placeholder'=>'Title']) !!}
                            {!! $errors->first('title','<p style="color:red">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Date:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::datetime('date',null,['class'=>'span10','placeholder'=>'2018-01-01']) !!}
                            {!! $errors->first('date','<p style="color:red">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Content:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::textarea('content',null,['class'=>'span10','placeholder'=>'Content']) !!}
                            {!! $errors->first('content','<p style="color:red">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Thumbnail:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::file('thumbnail',null,['class'=>'span10']) !!}
                            <br>
                            @if(isset($news))
                                <img src="{{ url('uploads/news/'.$news->thumbnail) }}" width="500px" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Author:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('author',null,['class'=>'span10','placeholder'=>'Author']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Description:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('description',null,['class'=>'span10','placeholder'=>'Description']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Status:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::select('status',[0=>'Ẩn',1=>'Hiển thị'],null,['class'=>'span10']) !!}
                            {!! $errors->first('status','<p style="color:red">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-actions">
                        {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


