<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $fillable = [
        'original_link',
        'short_link',
    ];
}
