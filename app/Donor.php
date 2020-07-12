<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $guarded = ['id'];
    protected $hidden = ['badge_id', 'blood_type_id','community_id'];
    protected $with = ['badge', 'blood_type', 'community'];

    //Relation
    public function badge() {
        return $this->belongsTo(Badge::class);
    }

    public function blood_type() {
        return $this->belongsTo(BloodType::class);
    }

    public function community() {
        return $this->belongsTo(Community::class);
    }

    public function donations() {
        return $this->belongsTo(Donation::class);
    }
}
