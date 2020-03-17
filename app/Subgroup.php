<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgroup extends Model
{
    protected $table = 'subgroup';
    protected $fillable = ['name','credit','category_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function subject(){
        return $this->hasMany(Subject::class);
    }
}
