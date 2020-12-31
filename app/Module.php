<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function promos()
    {
        return $this->belongsToMany('Promo');
    }

    public function eleves()
    {
        return $this->belongsToMany('Eleve');
    }
}
