@extends('layouts.auction')

@section('active-home')
    menu__item--current
    @parent
@stop

@section('auction-content')

    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest <span>Sale</span></h3>
                        <p>Special for today</p>
                        <a class="hvr-outline-out button2" href="{{ route('items') }}">Bid Now </a>
                    </div>
                </div>
            </div>
            {{--<div class="item item2">--}}
                {{--<div class="container">--}}
                    {{--<div class="carousel-caption">--}}
                        {{--<h3>Summer <span>Collection</span></h3>--}}
                        {{--<p>New Arrivals On Sale</p>--}}
                        {{--<a class="hvr-outline-out button2" href="mens.html">Shop Now </a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item item3">--}}
                {{--<div class="container">--}}
                    {{--<div class="carousel-caption">--}}
                        {{--<h3>The Biggest <span>Sale</span></h3>--}}
                        {{--<p>Special for today</p>--}}
                        {{--<a class="hvr-outline-out button2" href="{{ route('items') }}">Bid Now </a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Summer <span>Collection</span></h3>
                        <p>New Arrivals On Sale</p>
                        <a class="hvr-outline-out button2" href="{{ route('items') }}">Bid Now </a>
                    </div>
                </div>
            </div>
            <div class="item item5">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>The Biggest <span>Sale</span></h3>
                        <p>Special for today</p>
                        <a class="hvr-outline-out button2" href="{{ route('items') }}">Bid Now </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!-- //banner -->

    <!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">
            <h3 class="wthree_text_info">New <span>Auctions</span></h3>
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li> {{ $first_category->name }}</li>
                    <li> {{ $second_category->name }}</li>
                    <li> {{ $third_category->name }}</li>
                    <li> {{ $fourth_category->name }}</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        @foreach($first_categories as $item)

                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-front" height="291px" width="255px">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-back" height="291px" width="255px">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ route('item.single', ['item' => $item->id]) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Live</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{ route('item.single', ['item' => $item->id]) }}">{{ $item->name }}</a></h4>
                                        <div class="info-product-price">
                                            <span style="color: #0F9E5E; font-size: 10px;">Initial Price</span>
                                            <span class="item_price">GHS {{ $item->initial_price }}</span><br/>
                                            <span style="color: #660066; font-size: 10px;">Ending {{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</span>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                           <a href="{{ route('item.single', ['item' => $item->id]) }}" style="color: #ffffff;">Place Bid</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="clearfix"></div>
                    </div>
                    <!--//tab_one-->
                    <!--/tab_two-->
                    <div class="tab2">
                        @foreach($second_categories as $item)

                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-front" height="291px" width="255px">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-back" height="291px" width="255px">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ route('item.single', ['item' => $item->id]) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Live</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{ route('item.single', ['item' => $item->id]) }}">{{ $item->name }}</a></h4>
                                        <div class="info-product-price">
                                            <span style="color: #0F9E5E; font-size: 10px;">Initial Price</span>
                                            <span class="item_price">GHS {{ $item->initial_price }}</span><br/>
                                            <span style="color: #660066; font-size: 10px;">Ending {{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</span>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                            <a href="{{ route('item.single', ['item' => $item->id]) }}" style="color: #ffffff;">Place Bid</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <!--//tab_two-->
                    <div class="tab3">

                        @foreach($third_categories as $item)

                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-front" height="291px" width="255px">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-back" height="291px" width="255px">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ route('item.single', ['item' => $item->id]) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Live</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{ route('item.single', ['item' => $item->id]) }}">{{ $item->name }}</a></h4>
                                        <div class="info-product-price">
                                            <span style="color: #0F9E5E; font-size: 10px;">Initial Price</span>
                                            <span class="item_price">GHS {{ $item->initial_price }}</span><br/>
                                            <span style="color: #660066; font-size: 10px;">Ending {{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</span>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                            <a href="{{ route('item.single', ['item' => $item->id]) }}" style="color: #ffffff;">Place Bid</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="clearfix"></div>
                    </div>
                    <div class="tab4">

                        @foreach($fourth_categories as $item)

                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-front" height="291px" width="255px">
                                        <img src="{{ asset($item->image) }}" alt="" class="pro-image-back" height="291px" width="255px">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ route('item.single', ['item' => $item->id]) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Live</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="{{ route('item.single', ['item' => $item->id]) }}">{{ $item->name }}</a></h4>
                                        <div class="info-product-price">
                                            <span style="color: #0F9E5E; font-size: 10px;">Initial Price</span>
                                            <span class="item_price">GHS {{ $item->initial_price }}</span><br/>
                                            <span style="color: #660066; font-size: 10px;">Ending {{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</span>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                            <a href="{{ route('item.single', ['item' => $item->id]) }}" style="color: #ffffff;">Place Bid</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //new_arrivals -->
    <!--/grids-->
    <div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-4 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-4 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>You can contact us on our social media platforms, email and hotlines everyday.</p>
                    </div>
                </div>
                <div class="col-md-4 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!--grids-->

@endsection