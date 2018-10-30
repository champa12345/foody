@extends('layouts.admin')
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="{{ url('admin') }}"> <i class="icon-dashboard"></i> <span class="label label-important"></span>Trang chủ</a> </li>
                <li class="bg_lg"> <a href="{{ url('admin/category') }}"> <i class="icon-signal"></i> Danh mục</a> </li>
                <li class="bg_ly"> <a href="{{ url('admin/category') }}"> <i class="icon-inbox"></i><span class="label label-success"></span> Sản phẩm </a> </li>
                <li class="bg_lo"> <a href="{{ url('admin/news') }}"> <i class="icon-th"></i> Tin tức </a> </li>
                <li class="bg_ls"> <a href="{{ url('admin/group') }}"> <i class="icon-fullscreen"></i> Nhóm người dùng </a> </li>
                <li class="bg_lb"> <a href="{{ url('admin/group') }}"> <i class="icon icon-th-list"></i> Đơn hàng </a> </li>
                <li class="bg_dg"> <a href="{{ url('admin/group') }}"> <i class="icon icon-bold"></i> Thương hiệu </a> </li>
                <li class="bg_lo"> <a href="{{ url('admin/contact') }}"> <i class="icon-th-list"></i> Liên hệ</a> </li>
            </ul>
        </div>
        <!--End-Action boxes-->

        <!--Chart-box-->
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
                    <h5>Thống kê</h5>
                </div>
                <div class="widget-content" >
                    <div class="row-fluid">
                        <div class="span9">
                            <div class="chart"></div>
                        </div>
                        <div class="span3">
                            <ul class="site-stats">
                                <li class="bg_lh"><i class="icon-user"></i> <strong>{{ $totaluser }}</strong> <small>Người dùng</small></li>
                                <li class="bg_lh"><i class="icon-tag"></i> <strong>{{ $totalorder }}</strong> <small>Đơn hàng</small></li>
                                <li class="bg_lh"><i class="icon-inbox"></i> <strong>{{ $totalproduct }}</strong> <small>Sản phẩm</small></li>
                                <li class="bg_lh"><i class="icon-th"></i> <strong>{{ $totalnews }}</strong> <small>Tin tức</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End-Chart-box-->
        <hr/>

    </div>
@endsection
