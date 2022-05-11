<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ticketcontroller;

 Route::get('/', [Ticketcontroller::class ,'show']);
 Route::post('/store',[Ticketcontroller::class,'store']);
