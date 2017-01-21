<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'type', 'location', 'post_id', 'post_title', 'content'
    ];

    
}
