@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    {{ $item->name }}: Bids
                </div>
                <br/>
                <div class="table-responsive">
                    @if($item->bids->count() > 0)

                        <table class="table table-bordered table-hover">

                            <thead>
                            <th>Bidder Name</th>
                            <th>Bid Amount (GHS)</th>
                            <th>Bid Date</th>
                            <th>Status</th>
                            {{--<th>Actions</th>--}}
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
                                    {{--<td>--}}
                                        {{--@if($bid->status == 0)--}}
                                            {{--<a href="{{ route('item.accept', ['item' => $item->id, 'bid' => $bid->id]) }}"--}}
                                               {{--class="btn btn-warning">Accept</a>--}}

                                        {{--@endif--}}
                                        {{--<a href="#" class="btn btn-danger">Delete Auction</a>--}}
                                    {{--</td>--}}

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

        <div class="clearfix"> </div>

    </div>

@endsection