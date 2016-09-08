<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcategories extends Model
{
    protected $table = 'postcategories';
    protected $guarded = [''];
    public $timestamps = false;
}
