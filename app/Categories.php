<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $guarded = [''];
    public $timestamps = false;
    
    public function Posts()
    {
        return $this->belongsToMany('App\Posts', 'post_id');
    }
}
