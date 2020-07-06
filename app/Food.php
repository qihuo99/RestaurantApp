<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //make mass assignable. 
    protected $fillable = ['foodname', 'description', 'price','category_id'];
}
