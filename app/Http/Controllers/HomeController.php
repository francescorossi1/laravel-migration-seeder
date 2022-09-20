<?php

namespace App\Http\Controllers;

use App\Models\Train;

class HomeController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', ['trains' => $trains]);
    }
}
