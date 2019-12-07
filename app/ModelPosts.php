<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPosts extends Model
{
    protected $table = "posts";
    public function comments()
    {
    	return $this->hasMany('App\ModelComments','post_id','id');
    }
}
