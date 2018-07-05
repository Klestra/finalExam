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

    public function updateAction(Request $request)
    {
        $updateInstrument = Instrument::find($request->input('id'));
        $updateInstrument->title = $request->input('title');
        $updateInstrument->excerpt = $request->input('excerpt');
        $updateInstrument->price = $request->input('price');
        $updateInstrument->colors_id = $request->input('color');
        $updateInstrument->save();
        return redirect('/products');
    }

    /* La fonction updateAction avec detach et attach qui ne marchait pas
    
    public function updateAction(Request $request)
    {
        $updateInstrument = Instrument::find($request->input('id'));
        $updateInstrument->title = $request->input('title');
        $updateInstrument->excerpt = $request->input('excerpt');
        $updateInstrument->price = $request->input('price');
        $updateInstrument->colors_id = $request->input('color');
        $updateInstrument->numbers()->detach();
        foreach ($request->input('numbers') as $key => $value) {
            $updateInstrument->numbers()->attach($value);
        };
        $updateInstrument->save();
        return redirect('/products');
    }

    */

    /* La fonction insertAction attach qui ne marchait pas

    public function insertAction(Request $request) 
    {
        $newInstrument = new Instrument;
        $newInstrument->title = $request->input('title');
        $newInstrument->excerpt = $request->input('excerpt');
        $newInstrument->price = $request->input('price');
        $newInstrument->colors_id = $request->input('color');
        foreach ($request->input('numbers') as $key => $value) {
            $newInstrument->numbers()->attach($value);
        };
        $newInstrument->save();
        return redirect('/products');
    }
    */
}

