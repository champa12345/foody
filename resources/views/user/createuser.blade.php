@extends('layouts.admin')
@section('title') Admin | User | Create @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/user') }}" title="Go to User" class="tip-bottom"><i class="fas fa-clipboard-list"></i> User</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <h2>Create new User</h2>
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Create new user</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['method'=>'POST','url'=>'admin/user','class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Name',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['class'=>'span10','placeholder'=>'Name']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Email',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::email('email',null,['class'=>'span10','placeholder'=>'Adminbanhang@bookstore.com']) !!}
                            {!! $errors->first('email','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Password',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::password('password',null,['class'=>'span10','placeholder'=>'********']) !!}
                            {!! $errors->first('password','<p style="color:red;">:message</p>') !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Address',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('address',null,['class'=>'span10','placeholder'=>'Hà Tĩnh']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Phone',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('phone',null,['class'=>'span10','placeholder'=>'0968999999']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        {!! Form::label('Group',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::select('group_id',$group,null,['class'=>'span10']) !!}
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