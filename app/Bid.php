<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
      'item_id', 'bidder_id', 'bid_amount', 'status'
    ];

    public function item() {
        return $this->belongsTo(Item::class);
    }

    public function bidder() {
        return $this->belongsTo(Buyer::class, 'bidder_id');
    }

}
