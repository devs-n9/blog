<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
class Posts extends Model
{
    protected $table = 'posts';
    protected $guarded = [''];
    public $timestamps = false;
    
    public function Categories()
    {
        return $this->belongsToMany('App\Categories', 'postcategories', 'post_id', 'category_id');
    }
}
