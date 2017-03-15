<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_pegawai extends Model
{
    protected $table ='pegawai';
    protected $primaryKey ='id_pegawai';

    public $timestamps = false;

    public function keuser(){
        return $this->belongsTo(m_user::class,'id_user');
    }
}
