<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "posts";

    protected $fillable = [
        'author_id', 'category_id', 'tags', 'title', 'body', 'votes'
    ];
}
