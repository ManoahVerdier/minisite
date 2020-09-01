<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    public function faq_categorie()
    {
        return $this->belongsTo(\App\FaqCategorie::class);
    }
}
