<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	* Dear Mr Eloquent, MySQL will handle the timestamp columns for us, thank you
	*
	*/
	public $timestamps = false;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'type', 'location', 'post_id', 'post_title', 'content'
    ];

    
}
