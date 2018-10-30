<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Danh mục</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @if(isset($cate))
                @foreach($cate as $item)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a href="{{ url('category/'.$item->id) }}">{{ $item->name }}</a></h4>
                        </div>
                    </div>
                @endforeach
            @endif
        </div><!--/category-products-->
        <div class="price-range"><!--price-range-->
            <h2>Tìm kiếm theo giá</h2>
            <div class="well" style="height: 250px;">
                {!! Form::open(['method'=>'GET','url'=>['search']]) !!}
                    {!! Form::number('pricefrom',null,['style'=>'width: 80px;float: left;','placeholder'=>'đ Từ']) !!}
                    {!! Form::number('priceto',null,['style'=>'width: 80px;float: left;margin-left: 23px;','placeholder'=>'đ Đến']) !!}
                    <input type="submit" value="Lọc" style="float: left; margin-top: 15px; margin-left: 70px;" class="btn btn-warning">
                    {!! $errors->first('pricefrom','<p style="color:red; margin-top: 20px;float:left">Vui lòng chọn khoảng phù hợp</p>') !!}
                    {!! $errors->first('priceto','<p style="color:red;margin-top: 20px;float:left">Vui lòng chọn khoảng phù hợp</p>') !!}
                    @if(Session::has('error'))
                        <p style="color:red; margin-top: 20px;float:left">{{ Session::get('error') }}</p>
                    @endif
                {!! Form::close() !!}
            </div>
        </div>
        <div class="shipping text-center"><!--shipping-->
            <img src="{{ asset('img') }}/home/shipping.jpg" alt="" />
        </div><!--/shipping-->

    </div>
</div>
