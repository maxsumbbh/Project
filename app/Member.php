<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['name','position_id','image','tel','email'];

    public function position(){
        return $this->belongsTo(Position::class,'position_id');
    }
}
