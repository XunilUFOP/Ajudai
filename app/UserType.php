<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //
    protected $table = "types";

    protected $fillable = [
        'type'
    ];
}
