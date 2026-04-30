<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;

class UserSiswaController extends Controller
{

    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        return view('user.siswa.index', compact('siswa'));
    }

public function create()
{
    $kelas = Kelas::all();
    return view('user.siswa.create', compact('kelas'));
}

}