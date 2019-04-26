@extends('layouts.auction')

@section('active-auctions')
    menu__item--current
    @parent
@stop

@section('auction-content')

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Auction <span> Items </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{ route('index') }}">Home</a><i>|</i></li>
                        <li>Auction Items</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">

            @foreach($items as $item)

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


        </div>
    </div>

@endsection