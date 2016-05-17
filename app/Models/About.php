<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'vision', 'mission', 'history', 'logo', 'phone', 'email', 'address', 'facebook', 'twitter', 'instagram', 'latitude', 'longitude',
    ];

    /*
     | Mutator
     */
    public function setVisionAttribute($vision)
    {
        return $this->attributes['vision'] = trim(ucfirst($vision));
    }

    public function setMissionAttribute($mission)
    {
        return $this->attributes['mission'] = trim(ucfirst($mission));
    }

    public function setHistoryAttribute($history)
    {
        return $this->attributes['history'] = trim(ucfirst($history));
    }

    public function setAddressAttribute($address)
    {
        return $this->attributes['address'] = trim(ucfirst($address));
    }
}
