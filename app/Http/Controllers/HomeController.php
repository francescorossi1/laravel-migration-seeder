<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::all()->where('departure_date', '2022-09-20 00:00:00');
        return view('home', ['trains' => $trains]);
    }
}
