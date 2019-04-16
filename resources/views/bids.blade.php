@extends('layouts.auction')

@section('auction-content')

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Item <span>Bids </span></h3>
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

    <div class="banner-bootom-w3-agileits">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    @if($item->bids->count() > 0)

                        <table class="table table-bordered table-hover">

                            <thead>
                                <th>Bidder Name</th>
                                <th>Bid Amount (GHS)</th>
                                <th>Bid Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                            @foreach($item->bids as $bid)

                                <tr>
                                    <td>{{ $bid->bidder->name }}</td>
                                    <td>{{ $bid->bid_amount }}</td>
                                    <td>{{ $bid->created_at->diffForHumans() }}</td>
                                    {{--<td>{{ $bid->created_at->toFormattedDateString() }}</td>--}}
                                    <td>
                                        @if($bid->status == 0)
                                            <label class="badge badge-info">pending</label>
                                        @else
                                            <label class="badge badge-success">accepted</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if($bid->status == 0)
                                            <a href="{{ route('item.accept', ['item' => $item->id, 'bid' => $bid->id]) }}"
                                               class="btn btn-warning">Accept</a>

                                        @endif
                                        {{--<a href="#" class="btn btn-danger">Delete Auction</a>--}}
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    @else

                        <br/>
                        <h3 class="text-center">No Bids Yet.</h3>
                        <br/>

                    @endif

                </div>

            </div>

        </div>
    </div>

@endsection