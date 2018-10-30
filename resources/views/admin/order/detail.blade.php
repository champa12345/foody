@extends('layouts.admin')
@section('title')
    Order Detail
@endsection
@section('content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('admin/order') }}" title="Go to order" class="tip-bottom"><i class="fas fa-clipboard-list"></i> Order</a></div>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5 style="color: orange;">Thông tin khách hàng</h5>
                </div>
            </div>
            <div class="widget-content nopadding">
                @if(isset($order))
                    <table class="table table-striped" >
                        <tr>
                            <td><b>Name: </b></td>
                            <td>{{ $order->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                            <td>{{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td><b>Address:</b></td>
                            <td>{{ $order->address }}</td>
                        </tr>
                        <tr>
                            <td><b>Phone:</b></td>
                            <td>{{ $order->phone }}</td>
                        </tr>
                    </table>
                @endif
            </div>
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5 style="color: orange;">Chi tiết đơn hàng</h5>
                </div>
            </div>
            <div class="widget-content nopadding">
                @if(isset($orderdetail))
                    <table class="table table-striped">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Giảm giá</th>
                            <th>Tổng tiền</th>
                        </tr>
                        <?php $tong = 0; ?>
                        @foreach($orderdetail as $item)
                            <tr>
                                <td style="text-align: center;">{{ $item->name }}</td>
                                <td style="text-align: center;">{{ $item->quantity }}</td>
                                <td style="text-align: center;">{{ number_format($item->price) }} VNĐ</td>
                                <td style="text-align: center;">{{ $item->discount }} %</td>
                                <td style="text-align: center;">{{ number_format($item->amount) }} VNĐ</td>
                                <?php $tong = $tong + $item->amount; ?>
                            </tr>
                        @endforeach
                        <tr>
                            <td style="color: red; font-weight: bold;">Tổng: <?php echo number_format($tong).'VNĐ'; ?></td>
                        </tr>
                    </table>
                @endif
            </div>
            <br>
            <p>Cập nhật trạng thái đơn hàng:</p>
            {!! Form::model($order,['method'=>'PATCH','url'=>['admin/order/'.$order->id],'class'=>'form-horizontal']) !!}
                {!! Form::hidden('name',null,['class'=>'span10']) !!}
                {!! Form::hidden('email',null,['class'=>'span10']) !!}
                {!! Form::hidden('address',null,['class'=>'span10']) !!}
                {!! Form::hidden('phone',null,['class'=>'span10']) !!}
                <div class="control-group">
                    {!! Form::label('Status:',null,['class'=>'control-label']) !!}
                    <div class="controls">
                        {!! Form::select('status',[1=>'Đang chờ xác nhận',2=>'Đang giao hàng',3=>'Đã giao hàng thành công',4=>'Hủy đơn hàng'],null,['id'=>'txtStatus','class'=>'span10']) !!}
                        {!! $errors->first('status','<p style="color:red;">:message</p>') !!}
                    </div>
                </div>
                <div class="form-actions">
                    {!! Form::submit('Cập nhật',['class'=>'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection