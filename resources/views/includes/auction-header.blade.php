<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            @auth('buyer')
                <li><a href="#"><i class="fa fa-user-circle"></i> {{ Auth::guard('buyer')->user()->name }}</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth

            @guest('buyer')
                <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>

                @endguest
            {{--<li> <a href="{{ route('login') }}"> Admin</a></li>--}}
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +233 234 567 8901</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">morrisauction@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            {{--<form action="#" method="post">--}}
                {{--<input type="search" name="search" placeholder="Search here..." required="">--}}
                {{--<input type="submit" value=" ">--}}
                {{--<div class="clearfix"></div>--}}
            {{--</form>--}}
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="{{ route('index') }}"><span>M</span>orris Auction</a></h1>
        </div>
        <!-- header-bot -->
        {{--<div class="col-md-4 agileits-social top_content">--}}
            {{--<ul class="social-nav model-3d-0 footer-social w3_agile_social">--}}
                {{--<li class="share">Share On : </li>--}}
                {{--<li><a href="#" class="facebook">--}}
                        {{--<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>--}}
                        {{--<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>--}}
                {{--<li><a href="#" class="twitter">--}}
                        {{--<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>--}}
                        {{--<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>--}}
                {{--<li><a href="#" class="instagram">--}}
                        {{--<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>--}}
                        {{--<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>--}}

            {{--</ul>--}}

        {{--</div>--}}
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->

<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item @yield('active-home')"><a class="menu__link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item @yield('active-auctions')"><a class="menu__link" href="{{ route('items') }}">Auction Items</a></li>
                            <li class=" menu__item @yield('active-bids')"><a class="menu__link" href="{{ route('mybids') }}">My Bids</a></li>
                            <li class=" menu__item @yield('active-sell')"><a class="menu__link" href="{{ route('sell.index') }}">Sell</a></li>
                            {{--<li class=" menu__item"><a class="menu__link" href="#">Contact</a></li>--}}
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            {{--<div class="wthreecartaits wthreecartaits2 cart cart box_1">--}}
                {{--<form action="#" method="post" class="last">--}}
                    {{--<input type="hidden" name="cmd" value="_cart">--}}
                    {{--<input type="hidden" name="display" value="1">--}}
                    {{--<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>--}}
                {{--</form>--}}

            {{--</div>--}}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                    <form action="{{ route('customer.login') }}" method="post">
                        @csrf
                    <div class="styled-input agile-styled-input-top">
                        <input type="email" name="email" required=>
                        <label>Email</label>
                        <span></span>
                    </div>
                    <div class="styled-input">
                        <input type="password" name="password" required>
                        <label>Password</label>
                        <span></span>
                    </div>
                    {{--<div class="styled-input">--}}

                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Remember Me</label>
                        {{--<span></span>--}}
                    {{--</div>--}}
                        <br/><br/>
                        <input type="submit" value="Sign In">
                    </form>
                    <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="{{ asset('auction/images/log_pic.jpg') }}" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                    <form action="{{ route('customer.create') }}" method="post">

                        @csrf

                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="name" required="">
                            <label>Full Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="phone_number" required="">
                            <label>Phone Number</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password_confirmation" required="">
                            <label>Confirm Password</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#">By clicking register, I agree to your terms</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="{{ asset('auction/images/log_pic.jpg') }}" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->
