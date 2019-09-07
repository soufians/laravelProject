<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    // Primary key
    public $primarykey = 'id';
    //Timestamps
    public $timestamp = true;

}

