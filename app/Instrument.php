<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public function color() {
        return $this->belongsTomany('App\Color');
    }
    public function numbers() {
        return $this->belongsTo('App\Number');
    }
}
