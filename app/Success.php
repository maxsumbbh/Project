<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Success extends Model
{
    protected $table = 'success';
    protected $fillable = ['id','name','text','image'];
}
