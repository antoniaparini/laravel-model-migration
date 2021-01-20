<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    /**
     * HOMEPAGE
     */
    public function index() {
        //echo 'Homepage here...';

        //Get data froma DB
        $cars = Car::all();
        dd($cars);


        return view ('home');
    }
}
