<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public function categorie()
    {
        return $this->belongsTo(\App\Categorie::class,'categorie');
    }

    public function sous_categorie()
    {
        return $this->belongsTo(\App\SousCategorie::class,'sous_categorie');
    }
}
