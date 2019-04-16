<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Buyer;
use App\Item;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users_count = User::count();
        $customers_count = Buyer::count();

        $todays_approved_items = Item::where('approved', '=', 1)->whereDate('created_at', Carbon::today())->get()->count();
        $todays_unapproved_items = Item::where('approved', '=', 0)->whereDate('created_at', Carbon::today())->get()->count();

        $closed_auctions = Item::where('status', '=', 1)->get()->count();
        $opened_auctions = Item::where('status', '=', 0)->get()->count();

        $bidders = Bid::all()->count();
        $accepted_bids = Bid::where('status', '=', 1)->get()->count();

        $total_auctions = Item::all()->count();

        notify()->success('Item successfully approved. It has been moved to approved items');

        return view('home', compact('users_count', 'customers_count', 'todays_approved_items',
            'todays_unapproved_items', 'closed_auctions', 'opened_auctions', 'bidders', 'accepted_bids', 'total_auctions'));
    }

    public function items_approved() {

        $items = Item::where('approved', '=', 1)->get();

//        dd($items->all());

        return view('admin.auction.approved', compact('items'));

    }

    public function items_unapproved() {

        $items = Item::where('approved', '=', 0)->get();

//        dd($items);
        return view('admin.auction.unapproved', compact('items'));

    }

    public function approve_item($id) {
        $item = Item::find($id);
        $item->approved = 1; // activate item auction
        $item->save();

        notify()->success('Item successfully approved. It has been moved to approved items');
        return redirect()->back();
    }

    public function item_bids($id) {

        $item = Item::find($id);

        return view('admin.auction.item-bids', compact('item'));

    }

    public function reports(){

        return view('admin.reports.index');
    }

    public function custom(Request $request) {

        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $items = Item::whereBetween('created_at', array($from_date, $to_date))->get();

//        dd($items);

        return view('admin.reports.custom', compact('items', 'from_date', 'to_date'));

    }


}
