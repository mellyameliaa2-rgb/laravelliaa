<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class UserKelasController extends Controller
{
    public function index()
    {
        $data = Kelas::all();
        return view('user.kelas.index', compact('data'));
    }
}
