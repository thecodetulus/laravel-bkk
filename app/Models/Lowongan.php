<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';
    protected $primaryKey = 'id_lowongan';

    protected $fillable = [
        'id_admin',
        'id_mitra',
        'nama_lowongan',
        'tgl_lowongan',
        'tgl_habis',
        'keterangan',
        'bidang'
    ];
}
