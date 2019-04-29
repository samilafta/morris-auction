@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    Generated Report<br>
                    From {{ $from_date }} to {{ $to_date }}
                </div>
                <br/>
                <div class="table-responsive">
                    @if($items->count() > 0)

                        <table class="table table-bordered table-hover">

                            <thead>
                                <th>Owner</th>
                                <th>Item Name</th>
                                <th>Initial Price (GHS)</th>
                                {{--<th>Item Image</th>--}}
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                            {{--<th>Actions</th>--}}
                            </thead>
                            <tbody>
                            @foreach($items as $item)

                                <tr>
                                    <td>
                                        {{ $item->owner->name }} <br/>
                                        {{ $item->owner->email }}
                                        {{ $item->owner->phone_number }}
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->initial_price }}</td>
                                    {{--<td><img src="{{ asset($item->image) }}" height="50px" width="70px"/></td>--}}
                                    <td>{{ \Carbon\Carbon::parse($item->start_date)->toFormattedDateString() }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->end_date)->toFormattedDateString() }}</td>
                                    <td>
                                        @if($item->status == 0)
                                            Live
                                        @else
                                            Closed
                                        @endif
                                    </td>
                                    {{--<td>--}}
                                        {{--<a href="{{ route('admin.item.bids', ['id' => $item->id]) }}" class="btn btn-warning">View Bids</a>--}}
                                        {{--<a href="#" class="btn btn-danger">Delete Auction</a>--}}
                                    {{--</td>--}}

                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    @else

                        <br/>
                        <h3 class="text-center">No Results Found.</h3>
                        <br/>

                    @endif
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>

    </div>

@endsection