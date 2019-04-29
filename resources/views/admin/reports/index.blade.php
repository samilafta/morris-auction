@extends('layouts.admin')

@section('admin-content')

    <div class="chit-chat-layer1">
        <div class="col-md-6 chit-chat-layer1-left">
            <div class="work-progres">
                <div class="chit-chat-heading">
                    GENERATE REPORT
                </div>
                <br/>

                {{--<div class="content">--}}
                <form action="{{ route('admin.generate') }}" method="POST">

                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter From Date</label>
                                <input type="text" class="form-control border-input" name="from_date" id="datepicker3" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter To Date</label>
                                <input type="text" class="form-control border-input" name="to_date" id="datepicker4" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status of Auction</label>
                                <select name="status" class="form-control border-input">
                                    <option value="0">Live</option>
                                    <option value="1">Closed</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Generate report</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                {{--</div>--}}

            </div>
        </div>

        <div class="clearfix"> </div>
    </div>

@endsection
