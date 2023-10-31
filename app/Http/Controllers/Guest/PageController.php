<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $all_trains = Train::all();

        return view('welcome', compact('all_trains'));
    }
}
