@extends('layouts.admin')
@section('title') Admin | User | Edit @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/user') }}" title="Go to User" class="tip-bottom"><i class="fas fa-clipboard-list"></i> User</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Edit user: {{ $user->name }}</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($user,['method'=>'PATCH','url'=>['admin/user',$user->id],'class'=>'form-horizontal']) !!}
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

                            {!! Form::hidden('password',null) !!}

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