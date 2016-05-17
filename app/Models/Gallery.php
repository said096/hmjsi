<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title', 'image', 'date',
    ];

    /*
     | Mutator
     */
    public function setTitleAttribute($title)
    {
        return $this->attributes['title'] = trim(ucwords($title));
    }
}
