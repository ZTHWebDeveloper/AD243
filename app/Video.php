<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   protected $fillable=[
    	'user_id',
    	'company_name',
    	'product_title',
    	'product_content',
    	'occupation',
    	'location',
    	'profile_name',
    	'profile',
    	'video',
    ];
}
