<!DOCTYPE HTML>
<html>
<head>
    <title>Morris Auction | Login :: Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ asset('admin/js/jquery-2.1.1.min.js') }}"></script>
    <!--icons-css-->
    <link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
</head>
<body>
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                {{--<input type="text" name="email" placeholder="Email" required="">--}}
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                {{--<input type="password" name="password" class="lock" placeholder="Password">--}}
                <input id="password" type="password" class="lock form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                {{--<input type="checkbox" id="brand1" value="">--}}
                                <input class="form-check-input" type="checkbox" name="remember" id="brand1 remember" {{ old('remember') ? 'checked' : '' }}>

                                <label for="brand1"><span></span>Remember me</label>
                            </li>
                        </ul>
                    </div>
                    {{--<div class="forgot">--}}
                        {{--<a href="#">Forgot password?</a>--}}
                    {{--</div>--}}
                    <div class="clearfix"> </div>
                </div>
                <button type="submit" name="Sign In" value="Login"></button>
                <h3>Not a member?<a href="#"> Sign up now</a></h3>
                <h2>or login with</h2>
            </form>
            <h5><a href="#">Go Back to Home</a></h5>
        </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
    <p>© 2019 Morris Auction. All Rights Reserved</p>
</div>
<!--COPY rights end here-->

<!--scrolling js-->
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ asset('admin/js/bootstrap.js') }}"> </script>
<!-- mother grid end here-->
</body>
</html>




