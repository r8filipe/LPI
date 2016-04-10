<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local_type extends Model
{
    //
    public $timestamp = true;
    protected $table = "local_type";
    protected $primarykey = 'id';
    protected $fillable = [
        'description'
    ];
}
