<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_jadwal extends Model
{
    protected $table = 'jadwaldokter';
    protected $primaryKey = 'id_jadwal';

    public $timestamps = false;


    public function kepegawai(){
        return $this->belongsTo(m_pegawai::class,'id_pegawai');
    }
}
