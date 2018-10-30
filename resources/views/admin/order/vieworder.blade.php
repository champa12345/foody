@extends('layouts.admin')
@section('title')
    Order
@endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/order') }}" title="Go to Order" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Order</a></div>
    </div>
    <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                <h5>View Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Date Order</th>
                        <th>Status</th>
                        <th>View detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($order))
                        @foreach($order as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ number_format($item->total) }} VNĐ</td>
                                <td>{{ $item->created_at }}</td>
                                    @if($item->status==1)
                                        <td>Đang chờ xác nhận ...</td>
                                    @elseif($item->status==2)
                                        <td>Đang giao hàng</td>
                                    @elseif($item->status==3)
                                        <td>Giao hàng thành công</td>
                                    @elseif($item->status==4)
                                        <td>Hủy đơn hàng</td>
                                    @endif
                                <td>
                                    <a href="{{ url('admin/order/'.$item->id.'/edit') }}" style="color: #27a9e3">Xem chi tiết</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection