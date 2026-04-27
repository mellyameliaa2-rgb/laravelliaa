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
    $rataRata = $jumlahKelas > 0 ? round($jumlahSiswa / $jumlahKelas, 1) : 0;

    return view('admin.dashboard', compact(
        'jumlahKelas',
        'jumlahSiswa',
        'rataRata'
    ));
}
}