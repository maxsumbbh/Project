<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = ['id','studentcode','name','studentyear_id','image'];

    public function studentyear(){
        return $this->belongsTo(studentyear::class,'studentyear_id');
    }
}
