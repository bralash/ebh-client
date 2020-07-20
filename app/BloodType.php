<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    public function community()
    {
        return $this->hasOneThrough(
            Community::class,
            Donor::class,
            'blood_type_id',
            'id',
            'id'
        );
    }
}
