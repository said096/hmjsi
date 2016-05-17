<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'image',
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
}
