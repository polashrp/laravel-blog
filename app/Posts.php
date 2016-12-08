<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
     protected $table = 'posts'; 

     protected $fillable = [
        'title',
        'post_content'
        
    ];
}
