@extends('layouts.admin')
@section('title') Admin | Group | Create @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/group') }}" title="Go to Group" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Group</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Create new Group</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::open(['url'=>'admin/group','method'=>'POST','class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        {!! Form::label('Name',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['class'=>'span10','placeholder'=>'Name']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
                        </div>
                        <div class="form-actions">
                            {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection