<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SousCategorie extends Model
{
    protected $table = 'sous_categories';

    protected $dates = ['deleted_at','updated_at'];

    public $searchableType = 'sous_categorie';

    public $searchableColumns = [
        'nom'
    ];

    public function parent()
    {
        return $this->belongsTo(\App\Categorie::class,'parent_id');
    }

    public function formations()
    {
        return $this->hasMany(\App\Formation::class,'sous_categorie_id');
    }
}
