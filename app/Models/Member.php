<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'NRK', 'name', 'address', 'photo', 'generation', 'phone',
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
}
