<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    protected $fillable = ['subcode','name','credit','subgroup_id','text'];

    public function subgroup(){
        return $this->belongsTo(Subgroup::class,'subgroup_id');
    }
}
