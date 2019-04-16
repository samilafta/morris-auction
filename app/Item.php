<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
        'initial_price',
        'start_date',
        'end_date',
        'status',
        'approved',
        'owner_id'
    ];

    public function owner() {
        return $this->belongsTo(Buyer::class, 'owner_id');
    }

    public function bids() {
        return $this->hasMany(Bid::class);
    }

}
