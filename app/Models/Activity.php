<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'image', 'cost', 'date_activity', 'date_opened', 'date_closed',
    ];

    /*
     | Mutator
     */
    public function setTitleAttribute($title)
    {
        return $this->attributes['title'] = trim(ucwords($title));
    }

    public function setSlugAttribute($slug)
    {
        return $this->attributes['slug'] = str_slug($slug, '-');
    }

    public function setDescriptionAttribute($description)
    {
        return $this->attributes['description'] = trim(ucfirst($description));
    }

    /*
     | Relationship
     */
    public function participants()
    {
        return $this->hasMany('App\Models\ActivityParticipant');
    }
}
