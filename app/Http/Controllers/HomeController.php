<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class HomeController extends Controller
{
    public function home()
    {
        $destinations = Destination::all();
        return view('user.home', compact('destinations'));
    }
}
