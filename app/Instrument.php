<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public function colors() {
        return $this->hasMany('App\Color', 'id', 'colors_id');
    }
    public function numbers() {
        return $this->belongsTo('App\Number');
    }
}
