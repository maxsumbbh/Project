<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';
    protected $fillable = ['id','title','content','image','updated_at'];

    public function images(){
        return $this->hasMany('App\ActivitieImage');
    }
}
