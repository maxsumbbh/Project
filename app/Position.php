<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'position';
    protected $fillable = ['id','name'];

    public function member(){
        return $this->hasMany(Member::class);
    }
}

