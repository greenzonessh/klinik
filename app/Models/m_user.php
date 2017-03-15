<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    protected $table ='user';
    protected $primaryKey ='id_user';

    public $timestamps = false;

    public function kepasien(){
        return $this->hasOne(m_pasien::class,'id_user');
    }

    public function kedokter(){
        return $this->hasOne(m_dokter::class,'id_user');
    }

    public function kepegawai(){
        return $this->hasOne(m_pegawai::class,'id_pegawai');
    }
}
