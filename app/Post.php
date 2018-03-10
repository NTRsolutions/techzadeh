<?php

namespace TechZadeh;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'content', 'img_url', 'category_id', 'author_id', 'view_count'
    ];

}
