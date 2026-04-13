<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $jumlahKelas = Kelas::count();
        $jumlahSiswa = Siswa::count();

        return view('admin.dashboard', compact(
            'jumlahKelas',
            'jumlahSiswa'
        ));
    }
}