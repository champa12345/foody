@extends('layouts.admin')
@section('title') Admin | Group | Edit @endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/group') }}" title="Go to Group" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Group</a></div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Edit {{ $group->name }}</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($group,['url'=>['admin/group',$group->id],'method'=>'PATCH','class'=>'form-horizontal']) !!}
                    <div class="control-group">
                            {!! Form::label('Name',null,['class'=>'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('name',null,['class'=>'span10','placeholder'=>'Name']) !!}
                            {!! $errors->first('name','<p style="color:red;">:message</p>') !!}
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