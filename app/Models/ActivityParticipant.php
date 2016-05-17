<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityParticipant extends Model
{
    protected $fillable = [
        'activity_id', 'name', 'email', 'address', 'place_birth', 'date_birth', 'gender', 'campus_name', 'phone',
    ];

    /*
     | Mutator
     */
    public function setNameAttribute($name)
    {
        return $this->attributes['name'] = trim(ucwords($name));
    }

    public function setAddressAttribute($address)
    {
        return $this->attributes['address'] = trim(ucfirst($address));
    }

    public function setPlaceBirthAttribute($place_birth)
    {
        return $this->attributes['place_birth'] = trim(ucwords($place_birth));
    }

    public function setCampusNameAttribute($campus_name)
    {
        return $this->attributes['campus_name'] = trim(ucwords($campus_name));
    }

    /*
     | Relationship
     */
    public function activity()
    {
        return $this->belongsTo('App\Models\Activity');
    }
}
