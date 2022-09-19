<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function parent_page(){
        return $this->belongsTo(Page::class,'parent','id');
    }
}
