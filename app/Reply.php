<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $table = "replies";

    protected $fillable = [
        'post_id', 'author_id', 'body', 'votes', 'closed'
    ];
}
