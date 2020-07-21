<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodDrive extends Model
{
    protected $hidden = ['organizer_id', 'organizer_type','community_id'];
    protected $with = ['community'];

    public function community() {
        return $this->belongsTo(Community::class);
    }
}
