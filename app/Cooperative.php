<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperative extends Model
{
    protected $table = 'cooperative';
    protected $fillable = ['name','text','location','image','file'];
}
