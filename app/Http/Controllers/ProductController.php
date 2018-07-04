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
        $numbers = Number::all();
        return view('/products/insert', ['colors' => $colors, 'numbers' => $numbers]);
    }

    public function update (Request $request) {
        $instrumentUpdate = Instrument::find($request->input('id'));
        $colors = Color::all();
        $numbers = Number::all();
        return view('/products/update', ['instruments' => $instrumentUpdate, 'colors' => $colors, 'numbers' => $numbers]);
    }
}

