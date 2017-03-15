<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $table = 'userlevel';
    protected $primaryKey = 'id_level';

    public $timestamps = false;

    public function keuser(){
        return $this->hasMany(User::class,'id_level');
    }
}
