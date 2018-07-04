<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Color;
use \App\Instrument;
use \App\Number;

class ProductController extends Controller
{
    public function show()
    {   
        $instruments = Instrument::all();
        $colors = Color::all();
        $numbers = Number::all();
        return view('/products/show', ['instruments' => $instruments, 'colors' => $colors, 'numbers' => $numbers]);
    }

    public function insert()
    {   
        $colors = Color::all();
        return view('/products/insert', ['colors' => $colors]);
    }
}

