<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create([
            'nis' => 123456,
            'id_kelas' => 1, // pastikan ID kelas ini ADA di tabel kelas
            'nama' => 'Budi Santoso',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Merdeka No. 10',
            'no_telp' => '081234567890',
        ]);

        Siswa::create([
            'nis' => 123457,
            'id_kelas' => 1,
            'nama' => 'Siti Aminah',
            'jenis_kelamin' => 'P',
            'alamat' => 'Jl. Sudirman No. 5',
            'no_telp' => '082345678901',
        ]);
    }
}

