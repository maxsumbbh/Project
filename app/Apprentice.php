<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    protected $table = 'apprentice';
    protected $fillable = ['name','text','location','image','file'];
}

