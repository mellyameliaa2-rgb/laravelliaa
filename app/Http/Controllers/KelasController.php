<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
  
    public function index()
    {
        $data = Kelas::all();
        return view('kelas.index', compact('data'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan'    => 'required',
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'jurusan'    => $request->jurusan,
        ]);

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas berhasil ditambahkan');
    }


    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'jurusan'    => 'required',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'jurusan'    => $request->jurusan,
        ]);

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas berhasil diperbarui');
    }

    public function hapus($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.hapus', compact('kelas'));
    }

    public function destroy($id)
    {
        Kelas::findOrFail($id)->delete();

        return redirect()->route('kelas.index')
            ->with('success', 'Data kelas berhasil dihapus');
    }
}
