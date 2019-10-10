<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'kvk',
        'address',
        'zipcode',
        'city',
        'phone',
        'email',
        'image',
        'user_id',
    ];
}