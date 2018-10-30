@extends('layouts.admin')
@section('title') Admin | Product | Create @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/contact') }}" title="Go to Contact" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Contact</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12" >
            <div class="widget-box">
                <h2>Create new Contact</h2>
                <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Create new contact</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['method'=>'POST','url'=>['admin/contact'],'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Address:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('address',null,['class'=>'span10','placeholder'=>'Address']) !!}
                            {!! $errors->first('address','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Phone:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('phone',null,['class'=>'span10','placeholder'=>'0969999999']) !!}
                            {!! $errors->first('phone','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Time Start:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::time('time_start',null,['class'=>'span10']) !!}
                            {!! $errors->first('time_start','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Time Finish:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::time('time_finish',null,['class'=>'span10']) !!}
                            {!! $errors->first('time_finish','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Introduction:',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::textarea('introduction',null,['class'=>'span10','placeholder'=>'Introduction ...']) !!}
                            {!! $errors->first('introduction','<p style="color:red;">:message</p>') !!}
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