<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function instruments() {
        return $this->belongsTomany('App\Instrument');
    }
}
