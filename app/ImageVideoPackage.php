<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ImageVideoPackage extends Model
{
	use SoftDeletes;
    protected $dates=['deleted_at'];

    protected $fillable=[
        'user_id',
        'number_post',
        'status',
        'total_amount',
        'code',
        'deleted_at',
    ];
}
