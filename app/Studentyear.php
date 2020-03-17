<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentyear extends Model
{
    protected $table = 'studentyear';
    protected $fillable = ['id','name'];

    public function student(){
        return $this->hasMany(Student::class);
    }
}