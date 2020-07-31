<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Community;

class BloodRequest extends Model
{
    protected $with = ['user','community','bloodType'];
    protected $hidden = ['requested_by', 'requester_location_id','blood_type_id'];

    //Relation
    public function user() {
        return $this->belongsTo(User::class, 'requested_by');
    }

    public function community() {
        return $this->belongsTo(Community::class, 'requester_location_id');
    }

    public function bloodType()
    {
        return $this->belongsTo('App\BloodType', 'blood_type_id');
    }
}
