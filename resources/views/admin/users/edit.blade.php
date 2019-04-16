@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-6 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    EDIT USER
                </div>
                <br/>

                {{--<div class="content">--}}
                <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control border-input" name="name" value="{{ $user->name }}" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control border-input" name="email" value="{{ $user->email }}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control border-input" name="password" >
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                {{--</div>--}}

            </div>
        </div>

        <div class="clearfix"> </div>
    </div>

@endsection
