<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    public function temoignages()
    {
        return $this->hasMany(\App\Temoignage::class,'conseil_id');
    }
}
