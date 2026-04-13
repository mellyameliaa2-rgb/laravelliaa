<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;

class UserDashboardController extends Controller
{
    public function user()
{
    $jumlahKelas = Kelas::count();
    $jumlahSiswa = Siswa::count();

    return view('user.dashboard', compact('jumlahKelas','jumlahSiswa'));
}
}