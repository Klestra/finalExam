<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Color;
use \App\Instrument;
use \App\Number;

class ProductActionController extends Controller
{
    public function delete(Request $request)
    {
        Instrument::destroy($request->input('id'));
        return redirect('/products');
    }

    public function insertAction(Request $request) 
    {
        $newInstrument = new Instrument;
        $newInstrument->title = $request->input('title');
        $newInstrument->excerpt = $request->input('excerpt');
        $newInstrument->price = $request->input('price');
        $newInstrument->colors_id = $request->input('color');
        $newInstrument->save();
        return redirect('/products');
    }

    
}
