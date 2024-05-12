<?php

namespace App\Http\Controllers;

use App\Models\Landmark;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function hello(){
        return view('fatah');
    }
}
