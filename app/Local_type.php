<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local_type extends Model
{
    //
    public $timestamp = true;
    protected $table = "local_types";
    protected $primarykey = 'id';
    protected $fillable = [
        'description'
    ];
}
