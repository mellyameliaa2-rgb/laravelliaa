<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'id_kelas',
         'nama',
          'jenis_kelamin',
           'alamat',
            'no_telp',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}