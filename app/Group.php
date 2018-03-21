<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=['name','id'];
    protected $hidden =[
        'create_at','update_at'
    ];
    public function students(){
        return $this -> hasMany('App\student');

    }

}
