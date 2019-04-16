@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    USERS
                </div>
                <div class="table-responsive">
                    @if($users->count() > 0)

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                {{--<th>#</th>--}}
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th></th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    {{--<td>1</td>--}}
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>

                                    <td>
                                        <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                            <span class="badge badge-info">Edit</span></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">

                                            @csrf
                                            {{ @method_field('DELETE') }}

                                            <button type="submit" class="label label-danger">Delete</button>

                                        </form>
                                        {{--<a href=""> <span class="">Delete</span>--}}

                                        {{--</a>--}}

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @else

                        <h3 class="text-center">No Users Created Yet</h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
        <br/>
        <a href="{{ route('users.create') }}" class="pull-right btn btn-success">Add User</a>

    </div>

@endsection
