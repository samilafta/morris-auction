@extends('layouts.auction')

@section('auction-content')

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>My <span>Bids </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{ route('index') }}">Home</a><i>|</i></li>
                        <li>My Bids/Offerings</li>
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

                    @if($bids->count() > 0)

                        <table class="table table-bordered table-hover">

                            <thead>
                                <th>Item Name</th>
                                <th>Item Image</th>
                                <th>Bid Amount (GHS)</th>
                                <th>Bid Date</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                            @foreach($bids as $bid)

                                <tr>
                                    <td>{{ $bid->item->name }}</td>
                                    <td><img src="{{ asset($bid->item->image) }}" height="50px" width="50px"/></td>
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