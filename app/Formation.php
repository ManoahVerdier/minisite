<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations';

    protected $dates = ['deleted_at','updated_at'];

    public $searchableType = 'formations';

    public $searchableColumns = [
        'nom'
    ];

    public function categorie()
    {
        return $this->belongsTo(\App\Categorie::class);
    }

    public function sous_categorie()
    {
        return $this->belongsTo(\App\SousCategorie::class);
    }
}
