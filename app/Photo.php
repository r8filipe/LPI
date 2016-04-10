<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public $timestamp = true;
    protected $table = "photos";
    protected $primarykey = 'id';
    protected $fillable = [
        'event_id', 'photo'
    ];
}
