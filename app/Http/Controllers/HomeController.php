<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::all()->where('departure_date', today());
        return view('home', ['trains' => $trains]);
    }
}
