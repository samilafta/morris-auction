@extends('layouts.admin')

@section('admin-content')

    <div class="row">
        <!--market updates updates-->
        <div class="market-updates">
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $todays_approved_items }}</h3>
                        <h4>Todays's Approved Auctions</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-file-text-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $todays_unapproved_items }}</h3>
                        <h4>Today's Unapproved Auctions</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $total_auctions }}</h3>
                        <h4>Total Auctions</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-envelope-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--market updates end here-->
    </div>

    <br/>
    <div class="row">
        <!--market updates updates-->
        <div class="market-updates">
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $closed_auctions }}</h3>
                        <h4>Closed Auctions</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-file-text-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $opened_auctions }}</h3>
                        <h4>Opened Auctions</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $bidders }}</h3>
                        <h4>Total Bidders</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-envelope-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--market updates end here-->
    </div>

    <br/>
    <div class="row">
        <!--market updates updates-->
        <div class="market-updates">
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $accepted_bids }}</h3>
                        <h4>Accepted Bids</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-file-text-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $users_count }}</h3>
                        <h4>Total Users</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-8 market-update-left">
                        <h3>{{ $customers_count }}</h3>
                        <h4>Total Customers</h4>
                    </div>
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-envelope-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--market updates end here-->
    </div>


@endsection
