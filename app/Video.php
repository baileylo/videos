<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $sources = ['youtube'];

    public $statuses = ['public'];

    protected $fillable = [
        'title', 'slug', 'description', 'url', 'source_id', 'thumbnail', 'status', 'source'
    ];
}
