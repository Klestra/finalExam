<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    public function instruments() {
        return $this->belongsTomany('App\Instrument');
    }
}
