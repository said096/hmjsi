<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     | Mutator
     */
    public function setNameAttribute($name)
    {
        return $this->attributes['name'] = trim(ucwords($name));
    }
}
