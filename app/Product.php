<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $appends = ['stores', 'reviews'];

    public function getStoresAttribute() {
        return $this->belongsToMany('App\Store')->get();
    }
    public function stores() {
        return $this->belongsToMany('App\Store');
    }

    public function getReviewsAttribute() {
        return $this->hasMany('App\Review')->get();
    }
    public function review() {
        return $this->hasMany('App\Review');
    }
}
