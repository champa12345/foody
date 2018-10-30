<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{ asset('css/user/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/user/font-awesome.min.css') }} " rel="stylesheet">
    <link href="{{ asset('css/user/prettyPhoto.css') }} " rel="stylesheet">
    <link href="{{ asset('css/user/price-range.css') }} " rel="stylesheet">
    <link href="{{ asset('css/user/animate.css') }} " rel="stylesheet">
    <link href="{{ asset('css/user/main.css') }} " rel="stylesheet">
    <link href="{{ asset('css/user/responsive.css') }} " rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/user/mysytle.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }} "></script>
    <script src="{{ asset('js/respond.min.js') }} "></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('img') }}/ico/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset('img') }}/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ asset('img') }}/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ asset('img') }}/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img') }}/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><!--/head-->

<body>

@include('front.elements.header')

@yield('slide')

<section>
    <div class="container">
        <div class="row">

            @yield('leftsidebar')

            @yield('content')

        </div>
    </div>
</section>

@include('front.elements.footer')


<script src="{{ asset('js/jquery.js') }} "></script>
<script src="{{ asset('js/bootstrap.min.js') }} "></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }} "></script>
<script src="{{ asset('js/price-range.js') }} "></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }} "></script>
<script src="{{ asset('js/main.js') }} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
{{--<script type="text/javascript">--}}
    {{--$(document).on('click','.pagination a',function (e) {--}}
        {{--e.preventDefault();--}}
        {{--var page = $(this).attr('href').split('page=')[1];--}}
        {{--$.ajax({--}}
            {{--type: 'GET',--}}
            {{--url:'/comment/ajax?page='+page,--}}
            {{--success: function (data) {--}}
                {{--console.log(data)--}}
                {{--$('.comment').html(data);--}}
            {{--},--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
<script>
    function loadingComment() {
        $('#comment-content .pagination a').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: $(this).attr('href'),
                success: function (data) {
                    $('#comment-content').html(data);
                    loadingComment();
                },
                error: function (xhr) {
                    console.log(xhr.message);
                }
            });
        });
    }

    $(document).ready(function(){
        loadingComment();
        $("#zoom1").elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });

        $("#thumbs a").on('click',function () {
            var srcthumbs = $(this).attr("href");
            // alert(srcthumbs);
            $("#zoom1").fadeOut(function () {
                $("#zoom1").attr("src",srcthumbs);
                $("#zoom1").attr("data-zoom-image",srcthumbs);
                $("#zoom1").fadeIn();
            });
            return false;
        });
    });

</script>
<script>
    $(function () {
        if ($('#message-success').html()!=""){
            toastr.success($('#message-success').html(),{timeout:5000})
        }
        if ($('#message-thanhcong').html()!=""){
            toastr.success($('#message-thanhcong').html(),{timeout:5000})
        }

        if ($('#message-contact').html()!=""){
            toastr.success($('#message-contact').html(),{timeout:5000})
        }
        if ($('#message-error').html()!=""){
            toastr.warning($('#message-error').html(),{timeout:5000})
        }

    });
</script>
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(20.980652,105.7852393,17);
        var mapCanvas = document.getElementById("googlemap");
        var mapOptions = {center: myCenter, zoom: 15};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);

        google.maps.event.addListener(marker,'click',function() {
            var pos = map.getZoom();
            map.setZoom(9);
            map.setCenter(marker.getPosition());
            window.setTimeout(function() {map.setZoom(pos);},3000);
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdJbLebxL8Sc0TFlYMEx6RoEfSHdrhG2w&callback=myMap"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
</body>
</html>