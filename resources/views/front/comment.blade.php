@if($count==0)
    <p>Chưa có bình luận nào</p>
@else
    @if(isset($comment))
        @foreach($comment as $value)
            <ul>
                <li><a href=""><i class="fa fa-user"></i>{{ $value->name }}</a></li>
                <li><a href=""><i class="fa fa-clock-o"></i>{{ $value->created_at }}</a></li>
            </ul>
            <p style="margin-left: 30px;">{{ $value->content }}</p>
        @endforeach
    @endif
    {{ $comment->links() }}
@endif
