<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        return view('user.siswa.index', compact('siswa'));
    }
}
