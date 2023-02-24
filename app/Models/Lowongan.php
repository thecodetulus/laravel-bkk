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

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }
}
