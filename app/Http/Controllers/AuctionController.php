<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Buyer;
use App\Category;
use App\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionController extends Controller
{
    //->where('start_date', '<' Carbon::now())->where('end_date', '>' Carbon::now());
    public function index() {

//        $items = Item::where('start_date', '<', Carbon::now())
//            ->where('end_date', '>', Carbon::now())
//            ->where('status', '=', 0)
//            ->where('approved', '=', 1)->get();

        $first_category = Category::orderBy('created_at', 'desc')->first();
        $second_category = Category::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first();
        $third_category = Category::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first();
        $fourth_category = Category::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first();

        $first_categories =  $items = Item::where('start_date', '<', Carbon::now())
            ->where('end_date', '>', Carbon::now())
            ->where('status', '=', 0)
            ->where('category_id', '=', $first_category->id)
            ->where('approved', '=', 1)->get();

        $second_categories =  $items = Item::where('start_date', '<', Carbon::now())
            ->where('end_date', '>', Carbon::now())
            ->where('status', '=', 0)
            ->where('category_id', '=', $second_category->id)
            ->where('approved', '=', 1)->get();

        $third_categories =  $items = Item::where('start_date', '<', Carbon::now())
            ->where('end_date', '>', Carbon::now())
            ->where('status', '=', 0)
            ->where('category_id', '=', $third_category->id)
            ->where('approved', '=', 1)->get();

        $fourth_categories =  $items = Item::where('start_date', '<', Carbon::now())
            ->where('end_date', '>', Carbon::now())
            ->where('status', '=', 0)
            ->where('category_id', '=', $fourth_category->id)
            ->where('approved', '=', 1)->get();

//        dd($items);
        return view('welcome', compact( 'first_category', 'second_category',
            'third_category', 'fourth_category', 'first_categories', 'second_categories', 'third_categories', 'fourth_categories'));

    }

    public function customers()
    {

        $customers = Buyer::all();
        return view('admin.customers', compact('customers'));

    }

    public function sell() {

        $items = Item::where('owner_id', '=', Auth::guard('buyer')->user()->id)->get();

//        dd($items);

        return view('sell', compact('items'));

    }

    public function add_item() {

        $categories = Category::all();
        return view('add-item', compact('categories'));

    }

    public function store_item(Request $request) {

        $this->validate($request, [

            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'initial_price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'

        ]);

//        dd($request->all());

        $featured = $request->image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/items', $featured_new_name);

        Item::create([
           'name' => $request['name'],
           'description' => $request['description'],
           'image' => 'uploads/items/'.$featured_new_name,
            'category_id' => $request['category'],
            'initial_price' => $request['initial_price'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
            'status' => 0,
            'approved' => 0,
            'owner_id' => Auth::guard('buyer')->user()->id
        ]);

        notify()->success('Auction Item successfully created.');
        return redirect()->route('sell.index');

    }

    public function item_single($id) {

        $item = Item::find($id);
        $featureds = Item::where('start_date', '<', Carbon::now())->where('end_date', '>', Carbon::now())
                        ->where('category_id', '=', $item->category_id)->get();
        return view('product-single', compact('item', 'featureds'));
    }

    public function store_bid(Request $request) {

        $this->validate($request, [
            'bid_amount' => 'required',
        ]);

        Bid::create([
           'item_id' => $request['item_id'],
           'bidder_id' => Auth::guard('buyer')->user()->id,
            'bid_amount' => $request['bid_amount'],
            'status' => 0
        ]);

        notify()->success('Bid successfully added');

        return redirect()->back();

    }

    public function item_bids($id) {

        $item = Item::find($id);

        return view('bids', compact('item'));

    }

    public function bid_accept($id, $bid){

        $item = Item::find($id);
        $item->status = 1; // when a user's bid has been accepted,change the status
        $item->save();

        $bid = Bid::find($bid);
        $bid->status = 1; // when a user's bid has been accepted
        $bid->save();

        notify()->success('Bid successfully accepted. Auction is closed');

        return redirect()->back();

    }

    public function items_display(){

        $items = Item::where('start_date', '<', Carbon::now())
            ->where('end_date', '>', Carbon::now())
            ->where('status', '=', 0)
            ->where('approved', '=', 1)->get();
        //        dd($items);
        return view('items', compact('items'));

    }

    public function my_bids(){

        $bids = Bid::where('bidder_id', '=', Auth::guard('buyer')->user()->id)->get();

        return view('my-bids', compact('bids'));

    }

}



