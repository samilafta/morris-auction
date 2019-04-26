@extends('layouts.auction')

@section('active-auctions')
    menu__item--current
    @parent
@stop

@section('auction-content')

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Sell <span>Items </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{ route('index') }}">Home</a><i>|</i></li>
                        <li>{{ $item->name }}</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">

                        <ul class="slides">
                            <li style="list-style-type: none;" data-thumb="images/d2.jpg">
                                <div class="thumb-image"> <img src="{{ asset($item->image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            {{--<li data-thumb="images/d1.jpg">--}}
                                {{--<div class="thumb-image"> <img src="{{ asset($item->image) }}" data-imagezoom="true" class="img-responsive"> </div>--}}
                            {{--</li>--}}
                            {{--<li data-thumb="images/d3.jpg">--}}
                                {{--<div class="thumb-image"> <img src="{{ asset($item->image) }}" data-imagezoom="true" class="img-responsive"> </div>--}}
                            {{--</li>--}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>{{ $item->name }}</h3>
                <p><span class="item_price">GHS {{ $item->initial_price }}</span> (Initial Price)</p>
                <p><span style="color: #660066; font-size: 15px;">Ending {{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</span>
                </p>
                <div class="description">
                    <h5>Your bid should be higher than the initial price</h5>
                    <form action="{{ route('item.bid.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}" />
                        <input type="text" placeholder="Enter Bidding Amount" pattern="\d{0,10}\.?\d{0,2}" name="bid_amount" required/>
                        @if ($errors->has('bid_amount'))
                            <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('bid_amount') }}</strong>
                            </span>
                        @endif
                        <input type="submit" value="Bid">
                    </form>
                </div>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share">Share On : </li>
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

            </div>
            <div class="clearfix"> </div>
            <!-- /new_arrivals -->
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Description</li>
                        <li>Bids</li>
                        <li>Owner Information</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <div class="single_page_agile_its_w3ls">

                                <p>{{ $item->description }}</p>

                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">

                            <div class="single_page_agile_its_w3ls">
                                <div class="bootstrap-tab-text-grids">

                                    {{--{{ dd($item->bids->count()) }}--}}

                                    @if($item->bids->count() > 0)

                                        <table class="table table-bordered table-hover">

                                            <thead>
                                                <td>Bidder Name</td>
                                                <td>Bid Amount</td>
                                                <td>Date</td>
                                            </thead>
                                            <tbody>

                                                @foreach($item->bids as $bid)
                                                    <tr>
                                                        <td>{{ $bid->bidder->name }}</td>
                                                        <td>GHS {{ $bid->bid_amount }}</td>
                                                        <td>{{ $bid->created_at }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>

                                    @else
                                        <h3 class="text-center">No Bids For This Item Yet.</h3>
                                    @endif

                                </div>

                            </div>
                        </div>
                        <div class="tab3">

                            <div class="single_page_agile_its_w3ls">

                                <table class="table table-bordered">

                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $item->owner->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $item->owner->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td>{{ $item->owner->phone_number }}</td>
                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->

            <div class="w3_agile_latest_arrivals">
                <h3 class="wthree_text_info">Featured <span>Auctions</span></h3>
                @foreach($featureds as $featured)

                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset($featured->image) }}" alt="" class="pro-image-front" height="291px" width="255px">
                                <img src="{{ asset($featured->image) }}" alt="" class="pro-image-back" height="291px" width="255px">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ route('item.single', ['item' => $featured->id]) }}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">Live</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{ route('item.single', ['item' => $featured->id]) }}">{{ $featured->name }}</a></h4>
                                <div class="info-product-price">
                                    <span style="color: #0F9E5E; font-size: 10px;">Initial Price</span>
                                    <span class="item_price">GHS {{ $featured->initial_price }}</span><br/>
                                    <span style="color: #660066; font-size: 10px;">Ending {{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</span>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <a href="{{ route('item.single', ['item' => $featured->id]) }}" style="color: #ffffff;">Place Bid</a>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach
                <div class="clearfix"> </div>
                <!--//slider_owl-->
            </div>
        </div>
    </div>
    <!--//single_page-->

@endsection