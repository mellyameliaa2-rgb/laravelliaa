<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Siswa;

class UserSiswaController extends Controller
{

    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        return view('user.siswa.index', compact('siswa'));
    }

}
