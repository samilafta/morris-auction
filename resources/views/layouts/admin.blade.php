<!DOCTYPE HTML>
<html>
<head>
    <title>Administrator | Morris Auction </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ asset('admin/js/jquery-2.1.1.min.js') }}"></script>
    <!--icons-css-->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('auction/css/datepicker.css') }}" rel='stylesheet' type='text/css'/>

    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
    <!--//charts-->
    <!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
    <!-- Chartinator  -->
    <script src="{{ asset('admin/js/chartinator.js') }}" ></script>
    <!--geo chart-->

    <!--skycons-icons-->
    <script src="{{ asset('admin/js/skycons.js') }}"></script>
    <!--//skycons-icons-->

    @notify_css
    @notify_js

</head>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">

        @include('includes.admin-header')
            <!--inner block start here-->
            <div class="inner-block">

                @yield('admin-content')

            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class="copyrights">
                <p>© 2019 Morris Auction. All Rights Reserved </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>

    @include('includes.admin-sidebar')

</div>
<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<!--//scrolling js-->
<script type="text/javascript" src="{{ asset('auction/js/moment.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.js') }}"> </script>
<!-- mother grid end here-->
<script type="text/javascript" src="{{ asset('auction/js/bootstrap-datepicker.js') }}"></script>

<script type="text/javascript">

    $("#datetime3, #datetime4").datepicker({
        format: 'YYYY-MM-DD'
    }).parent().css("position :relative");


</script>

</body>
</html>