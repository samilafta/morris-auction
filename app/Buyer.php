<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyer extends Authenticatable
{

    use Notifiable;

    protected $guard = 'buyer';

    protected $fillable = [
        'name', 'email', 'phone_number', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function item() {
        return $this->hasMany(Item::class);
    }

    public function bids() {
        return $this->hasMany(Bid::class);
    }

}
