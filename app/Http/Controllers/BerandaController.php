<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;

class BerandaController extends Controller
{
    public function index()
    {
        $jumlahKelas = Kelas::count();
        $jumlahSiswa = Siswa::count();

        return view('beranda.index', compact(
            'jumlahKelas',
            'jumlahSiswa'
        ));
    }
}

