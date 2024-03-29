<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\product;


class Order extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

}
