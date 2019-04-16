@extends('layouts.auction')

@section('auction-content')

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Sell <span>Items </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{ route('index') }}">Home</a><i>|</i></li>
                        <li>Sell</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <div class="banner-bootom-w3-agileits">
        <div class="container">

            <div class="row">
                <a href="{{ route('sell.item.add') }}" class="btn btn-primary">Upload An Item For Auction</a>

            </div>
            <br>
            <div class="row">

                <div class="col-md-12">

                    @if($items->count() > 0)

                        <table class="table table-bordered table-hover">

                            <thead>
                                <th>Item Name</th>
                                <th>Initial Price (GHS)</th>
                                <th>Item Image</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Approved</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                            @foreach($items as $item)

                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->initial_price }}</td>
                                    <td><img src="{{ asset($item->image) }}" height="50px" width="50px"/></td>
                                    <td>{{ \Carbon\Carbon::parse($item->start_date)->toFormattedDateString() }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->end_date)->diffForHumans() }}</td>
                                    <td>
                                        @if($item->approved == 0)
                                            <label class="badge badge-warning">pending</label>
                                        @else
                                            <label class="badge badge-success">approved / live</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->status == 0)
                                            <label class="badge badge-success">opened</label>
                                        @else
                                            <label class="badge badge-info">Closed</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('item.bids', ['id' => $item->id]) }}" class="btn btn-warning">View Bids</a>
                                        {{--<a href="#" class="btn btn-danger">Delete Auction</a>--}}
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    @else

                        <br/>
                        <h3 class="text-center">No Auctions Created Yet.</h3>
                        <br/>

                    @endif

                </div>

            </div>
        </div>
    </div>

@endsection