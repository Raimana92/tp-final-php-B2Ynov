<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function eleves()
    {
        return $this->hasMany('Eleve');
    }

    public function modules()
    {
        return $this->belongsToMany('Module');
    }
}
