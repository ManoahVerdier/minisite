<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    public function faq_category()
    {
        return $this->belongsTo(\App\FaqCategory::class,'categ_id');
    }
}
