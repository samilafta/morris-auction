@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-6 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                   ADD NEW CATEGORY
                </div>
                <br/>

                {{--<div class="content">--}}
                    <form action="{{ route('categories.store') }}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control border-input" name="name" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Add</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                {{--</div>--}}

            </div>
        </div>

        <div class="clearfix"> </div>
    </div>

@endsection
