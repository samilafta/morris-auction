@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    CUSTOMERS
                </div>
                <div class="table-responsive">
                    @if($customers->count() > 0)

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                {{--<th>#</th>--}}
                                <th>Name</th>
                                <th>Created At</th>
                                {{--<th></th>--}}
                                {{--<th></th>--}}

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    {{--<td>1</td>--}}
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->created_at }}</td>

                                    {{--<td>--}}
                                        {{--<a href="{{ route('categories.edit', ['category' => $category->id]) }}">--}}
                                            {{--<span class="badge badge-info">Edit</span></a>--}}
                                    {{--</td>--}}
                                    {{--<td>--}}
                                        {{--<form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">--}}

                                            {{--@csrf--}}
                                            {{--{{ @method_field('DELETE') }}--}}

                                            {{--<button type="submit" class="label label-danger">Delete</button>--}}

                                        {{--</form>--}}
                                        {{--<a href=""> <span class="">Delete</span>--}}

                                        {{--</a>--}}

                                    {{--</td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @else

                        <h3 class="text-center">No Customers Signed Up Yet</h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>

    </div>

@endsection
