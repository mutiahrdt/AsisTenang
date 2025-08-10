<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;

class PekerjaController extends Controller
{
    public function index()
    {
        $pekerjaList = Pekerja::all();
        return view('pekerjaList', compact('pekerjaList'));
    }

    public function create()
    {
        return view('addPekerja');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_asisten' => 'required|string|max:255',
            'alamat_asisten' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'kodepos' => 'required|string|max:10',
            'pendidikan' => 'required|string|max:100',
            'pengalaman' => 'required|string|max:255',
            'bidang_keahlian' => 'required|string|max:255',
            'nomor_rekening' => 'required|string|max:50',
        ]);

        Pekerja::create([
            'namaAsisten' => $request->nama_asisten,
            'alamatAsisten' => $request->alamat_asisten,
            'nomorTelepon' => $request->nomor_telepon,
            'kodepos' => $request->kodepos,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'bidangKeahlian' => $request->bidang_keahlian,
            'nomorRekening' => $request->nomor_rekening,
        ]);

        return redirect()->route('pekerja.index')->with('success', 'Pekerja berhasil ditambahkan');
    }

    public function show($id)
    {
        $pekerja = Pekerja::findOrFail($id);
        return view('detailPekerja', compact('pekerja'));
    }

    public function edit($id)
    {
        $pekerja = Pekerja::findOrFail($id);
        return view('editPekerja', compact('pekerja'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_asisten' => 'required|string|max:255',
            'alamat_asisten' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'kodepos' => 'required|string|max:10',
            'pendidikan' => 'required|string|max:100',
            'pengalaman' => 'required|string|max:255',
            'bidang_keahlian' => 'required|string|max:255',
            'nomor_rekening' => 'required|string|max:50',
        ]);

        $pekerja = Pekerja::findOrFail($id);
        $pekerja->update([
            'namaAsisten' => $request->nama_asisten,
            'alamatAsisten' => $request->alamat_asisten,
            'nomorTelepon' => $request->nomor_telepon,
            'kodepos' => $request->kodepos,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'bidangKeahlian' => $request->bidang_keahlian,
            'nomorRekening' => $request->nomor_rekening,
        ]);

        return redirect()->route('pekerja.index')->with('success', 'Pekerja berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pekerja = Pekerja::findOrFail($id);
        $pekerja->delete();

        return redirect()->route('pekerja.index')->with('success', 'Pekerja berhasil dihapus');
    }
}
