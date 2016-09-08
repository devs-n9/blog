<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $guarded = [''];
    public $timestamps = false;
    
    public function Categories()
    {
        return $this->belongsToMany('App\Categories', 'category_id');
    }
}
