<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsupdate extends Model
{
    protected $table = 'newsupdate';
    protected $fillable = ['id','title','content','image'];
}
