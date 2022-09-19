<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contact';
    public $fillable = ['nom','email','telephone','message','date_choisie','formation'];
}
