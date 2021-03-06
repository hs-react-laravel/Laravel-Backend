<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'body',
        'status',
        'publish_from',
        'publish_to',
    ];
}
