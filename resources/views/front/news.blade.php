@extends('front.master')
@section('title') News @endsection
@section('leftsidebar')
    @include('front.elements.leftsidebar')
@endsection
@section('content')
    <div class="col-sm-9" style="margin-bottom: 50px;">
        <div class="blog-post-area">
            <h2 class="title text-center">Tin tức</h2>
            @if(isset($news))
                @foreach($news as $item)
                    <div class="single-blog-post">
                        <h3>{{ $item->title }}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> {{ $item->author }}</li>
                                <li><i class="fa fa-clock-o"></i> {{ $item->date }}</li>
                            </ul>
                        </div>
                        <a href="{{ url('news/'.$item->id) }}">
                            <img src="{{ url('uploads/news/'.$item->thumbnail) }}" style="width: 848px; height: 392px;" alt="">
                        </a>
                        <p>{{ substr($item->content,0,198) }}...&nbsp;&nbsp;</p>
                        <a class="btn btn-primary" href="{{ url('news/'.$item->id) }}">Xem thêm</a>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
    </div>
    {{ $news->links() }}
@endsection