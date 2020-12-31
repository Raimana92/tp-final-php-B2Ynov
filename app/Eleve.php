<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    public function promos()
    {
        return $this->belongsTo('Promo');
    }

    public function modules()
    {
        return $this->belongsToMany('Module');
    }
}
