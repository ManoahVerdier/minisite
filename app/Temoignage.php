<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    public function conseil()
    {
        return $this->belongsTo(\App\Conseil::class);
    }
}
