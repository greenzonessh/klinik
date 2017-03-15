<?php

namespace App;

use App\Models\m_dokter;
use App\Models\m_pasien;
use App\Models\m_pegawai;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
    protected $fillable = [
        'name', 'email', 'password',
    ];
    */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $table = 'user';
    protected $primaryKey = 'id_user';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function kedokter(){
        return $this->hasOne(m_dokter::class,'id_user');
    }

    public function kepasien(){
        return $this->hasOne(m_pasien::class,'id_user');
    }

    public function kepegawai(){
        return $this->hasOne(m_pegawai::class,'id_user');
    }

    public function keuserlevel(){
        return $this->belongsTo(level::class,'id_level');
    }

    public function punyaRule($namaRule){

        if ($this->keuserlevel->jenis_level == $namaRule){
            return true;
        }

        return false;
    }
}
