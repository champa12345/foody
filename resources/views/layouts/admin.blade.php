<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}"/>
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body>

<!--Header-part-->

@include('partials.header')
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                                                      data-target="#profile-messages" class="dropdown-toggle"><i
                        class="icon icon-user"></i> <span class="text">{{ Auth::user()->name }}</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('admin/profile') }}"><i class="icon-user"></i> Thông tin cá nhân</a></li>
                <li class="divider"></li>
                {{--<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>--}}
                {{--<li class="divider"></li>--}}
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="icon-key"></i> Đăng xuất
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</div>

@include('partials.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    @yield('content')
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2018 &copy; Huỳnh Cường Đại</a>
    </div>
</div>

<!--end-Footer-part-->

<script src="{{ asset('js/excanvas.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.flot.min.js') }}"></script>
<script src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('js/jquery.peity.min.js') }}"></script>
<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/matrix.js') }}"></script>
<script src="{{ asset('js/matrix.dashboard.js') }}"></script>
<script src="{{ asset('js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset('js/matrix.interface.js') }}"></script>
<script src="{{ asset('js/matrix.chat.js') }}"></script>
<script src="{{ asset('js/jquery.validate.js') }}"></script>
<script src="{{ asset('js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/jquery.wizard.js') }}"></script>
<script src="{{ asset('js/jquery.uniform.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/matrix.popover.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/matrix.tables.js') }}"></script>
<script src="{{ asset('js/myscript.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



{{--<script type="text/javascript">--}}
    {{--$(document).on('click','.pagination a',function (e) {--}}
        {{--e.preventDefault();--}}
        {{--var page = $(this).attr('href').split('page=')[1];--}}
        {{--$.ajax({--}}
            {{--type: 'GET',--}}
            {{--url:'/admin/ajax?page='+page,--}}
            {{--success: function (data) {--}}
                {{--console.log(data)--}}
                {{--$('.haha').html(data);--}}

            {{--},--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}
<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
<script>
    $(function () {
        // toastr.remove();
        if ($('#message-ok').html()!= null){
            // alert($('#message-success').html())
            toastr.success($('#message-ok').html(),{timeout:5000})
        }
        //
        // if ($('#message-contact').html()!=""){
        //     toastr.success($('#message-contact').html(),{timeout:5000})
        // }
        if ($('#message-error').html()!=null){
            toastr.warning($('#message-error').html(),{timeout:5000})
        }

    });
</script>
</body>
</html>
