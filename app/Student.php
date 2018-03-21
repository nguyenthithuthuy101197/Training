<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['name','age'];
    public function group(){
        return $this -> beLongsTo('App\group','group_id');
    }
}
