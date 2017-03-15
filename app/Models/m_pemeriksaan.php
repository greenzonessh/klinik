<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_pemeriksaan extends Model
{
    protected $table ='pemeriksaan';
    protected $primaryKey = 'id_pemeriksaan';

    public $timestamps = false;

    public function kepasien(){
        return $this->belongsTo(m_pasien::class,'id_pasien');
    }

    public function kedokter(){
        return $this->belongsTo(m_dokter::class,'id_dokter');
    }
}
