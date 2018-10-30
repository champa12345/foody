<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Thumbnail</th>
        <th>Discount</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Desciption</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($listproduct))
        @foreach($listproduct as $key => $item)
            <tr class="odd gradeX">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ number_format($item->price) }}</td>
                <td>
                    <img src="{{ url('uploads/product/'. $item->thumbnail ) }}" width="100px" alt="">
                </td>
                <td>{{ $item->discount }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->brand->name }}</td>
                <td>{{ $item->description }}</td>
                @if($item->status==0)
                    <td>Ẩn</td>
                @elseif($item->status==1)
                    <td>Hiển thị</td>
                @endif
                <td>
                    <a href="{{ url('admin/product/'.$item->id.'/edit') }}">
                        <button class="icon-edit btn btn-warning" style="width: 77px; float: left"> Edit</button>
                    </a>
                    {!! Form::open(['method'=>'DELETE','url'=>['admin/product',$item->id]]) !!}
                    <button type="submit" class="icon-remove btn btn-danger" onclick="return confirm('Are you sure?');">
                        Delete
                    </button>
                    {!! Form::close() !!}
                </td>
            </tr>

        @endforeach
    @endif

    </tbody>

</table>
{{ $listproduct->links() }}

