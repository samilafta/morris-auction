@extends('layouts.auction')

@section('active-sell')
    menu__item--current
    @parent
@stop

@section('auction-content')

    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Add <span>Item </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{ route('index') }}">Home</a><i>|</i></li>
                        <li>Add Item</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <div class="banner-bootom-w3-agileits">

        <div class="container">

            <h2>Create an<span> Auction </span></h2>
            <hr>
            <br>

            <form method="post" action="{{ route('sell.item.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-8">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control border-input">

                                    @foreach($categories as $category)

                                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" name="name" class="form-control" id="name" required/>
                                @if ($errors->has('name'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-8">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Initial Item Price (GHS)</label>
                                <input type="number" name="initial_price" class="form-control" required/>
                                @if ($errors->has('initial_price'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('initial_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Item Image</label>
                                <input type="file" name="image" class="form-control-file" id="image" required/>
                                @if ($errors->has('image'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-8">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="text" name="start_date" class="form-control" id="datetime3" required/>
                                @if ($errors->has('start_date'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">End Date</label>
                                <input type="text" name="end_date" class="form-control" id="datetime4" required/>
                                @if ($errors->has('end_date'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Item Description</label>
                            <textarea rows="5" class="form-control border-input" name="description" required></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Create Auction</button>

            </form>

        </div>
    </div>


@endsection