<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    public function donor()
    {
        return $this->belongsTo('App\Donor');
    }
}
