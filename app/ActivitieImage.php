<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivitieImage extends Model
{
    protected $table = 'activitie_image';
    protected $fillable = ['activitie_id','image_path'];

    public function activitie() {
        return $this->belongsTo('App\Activities');
    }
}
