<!--slider menu-->
<div class="sidebar-menu">
    <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
            <!--<img id="logo" src="" alt="Logo"/>-->
        </a> </div>
    <div class="menu">
        <ul id="menu" >
            <li id="menu-home" ><a href="{{ route('home') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-cogs"></i><span>Auction Items</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul>
                    <li><a href="{{ route('admin.items.approved') }}">Approved</a></li>
                    <li><a href="{{ route('admin.items.unapproved') }}">Unapproved</a></li>
                </ul>
            </li>
            <li id="menu-comunicacao" ><a href="{{ route('categories.index') }}"><i class="fa fa-book nav_icon"></i><span>Categories</span></a>
            </li>
            <li><a href="{{ route('admin.customers') }}"><i class="fa fa-users"></i><span>Customers</span></a></li>
            <li id="menu-academico" ><a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Users</span></a>
                {{--<ul id="menu-academico-sub" >--}}
                    {{--<li id="menu-academico-boletim" ><a href="login.html">Login</a></li>--}}
                    {{--<li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>--}}
                {{--</ul>--}}
            </li>

            <li><a href="{{ route('admin.reports') }}"><i class="fa fa-bar-chart"></i><span>Reports</span></a></li>

        </ul>
    </div>
</div>
<div class="clearfix"> </div>