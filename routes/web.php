<?php

use Illuminate\Support\Facades\Route;


Route::get('/', '\App\Http\Controllers\PageController@index');

Route::post('/send-message', '\App\Http\Controllers\PageController@send');
