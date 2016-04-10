<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $timestamp = true;
    protected $table = "events";
    protected $primarykey = 'id';
    protected $fillable = [
        'lat', 'long', 'sub_category_id', 'local_type_id', 'address'
    ];

    public function sub_category(){
        return $this->hasOne('App\Sub_category', 'id', 'sub_category_id');
    }

    public function photo(){
        return $this->hasMany('App\Photo');
    }
}
