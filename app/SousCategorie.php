<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SousCategorie extends Model
{
    public function parent()
    {
        return $this->belongsTo(\App\Categorie::class);
    }

    public function formations()
    {
        return $this->hasMany(\App\Formation::class,'sous_categorie');
    }
}
