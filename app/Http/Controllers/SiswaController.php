<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller

    // 🔹 LIST DATA SISWA
{
    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        return view('siswa.index', compact('siswa'));
    }


    // 🔹 FORM CREATE
    public function create()
    {
        $kelas = Kelas::all();

        return view('siswa.create', compact('kelas'));
    }

    // 🔹 SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'nis'           => 'required|unique:siswa,nis',
            'nama'          => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat'        => 'required',
            'no_telp'       => 'required',
            'id_kelas'      => 'required',
        ]);

        Siswa::create([
            'nis'           => $request->nis,
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'no_telp'       => $request->no_telp,
            'id_kelas'      => $request->id_kelas,
        ]);

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa berhasil ditambahkan!');
    }

    // 🔹 FORM EDIT
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();

        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    // 🔹 UPDATE DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis'           => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat'        => 'required',
            'no_telp'       => 'required',
            'id_kelas'      => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nis'           => $request->nis,
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'no_telp'       => $request->no_telp,
            'id_kelas'      => $request->id_kelas,
        ]);

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa berhasil diperbarui!');
    }

    // 🔹 DELETE DATA
    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa berhasil dihapus!');
    }
}