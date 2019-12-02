<?php

Route::get('/', 'AdminController@index');

Route::resource('restaurants', 'RestaurantController');