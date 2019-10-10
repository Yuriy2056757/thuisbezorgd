<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price', 'category', 'image',
    ];

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'consumable_order_table', 'consumable_id', 'order_id');
    }
}