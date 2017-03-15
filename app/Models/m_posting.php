<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_posting extends Model
{
    protected $table = 'posting';
    protected $primaryKey = 'id_posting';

    public $timestamps = false;
}
