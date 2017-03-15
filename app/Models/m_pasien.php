<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_pasien extends Model
{
    protected $table ='pasien';
    protected $primaryKey = 'id_pasien';

    public $timestamps = false;

    public function keuser(){
        return $this->belongsTo(m_user::class,'id_user');
    }

    public function kepemeriksaan(){
        return $this->hasMany(m_pemeriksaan::class,'id_pasien');
    }
}
