<?php

use App\Http\Controllers\LandingController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [LandingController::class,"hello"]);

