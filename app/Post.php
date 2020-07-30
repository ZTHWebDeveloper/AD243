<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
    	'user_id',
    	'company_name',
    	'post_title',
    	'post_content',
    	'occupation',
    	'location',
    	'profile_name',
    	'profile',
    	'img',
    ];
}
