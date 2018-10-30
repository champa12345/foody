@extends('layouts.admin')
@section('title') Admin | User | Profile @endsection
@section('content')
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>{{ Auth::user()->name }}'s profile</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table">
                        <tr>
                            <td>Name:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{{ Auth::user()->address }}</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>{{ Auth::user()->phone }}</td>
                        </tr>
                    </table>
                    <div class="form-actions">
                        <a href="{{ url('admin/user/'.Auth::user()->id.'/edit')  }}">
                            <button class="icon icon-edit btn btn-warning" style="height: 45px;"> Edit {{ Auth::user()->name }}'s profile</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection