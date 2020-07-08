<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    protected $table = 'categories';

    protected $dates = ['deleted_at','updated_at'];

    public $searchableType = 'categorie';

    public $searchableColumns = [
        'nom'
    ];

    public function formations()
    {
        return $this->hasMany(\App\Formation::class,'categorie_id');
    }

    public function sous_categories()
    {
        return $this->hasMany(\App\SousCategorie::class,'parent');
    }
}
