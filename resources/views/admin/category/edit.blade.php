@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-6 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    EDIT CATEGORY
                </div>
                <br/>

                {{--<div class="content">--}}
                <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">

                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control border-input" name="name" value="{{ $category->name }}" required>
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
