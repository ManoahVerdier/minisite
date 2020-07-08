<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    public function formations()
    {
        return $this->hasMany(\App\Formation::class,'categorie');
    }

    public function sous_categories()
    {
        return $this->hasMany(\App\SousCategorie::class,'parent');
    }
}
