<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CekBansos;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    public function index()
    {
        $user = Penduduk::all();
        $data = CekBansos::with('penduduk')->get();
        return view('backend.penyaluran.index', compact('user', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required|numeric',
            'tahapan' => 'required',
            'tanggal' => 'required',
            'status' => 'required'
        ]);
        
        CekBansos::create([
            'penduduk_id' => $request->penduduk_id,
            'tahapan' => $request->tahapan,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'alasan' => $request->alasan
        ]);

        return redirect()->route('admin.penyaluran.index')->with('success', 'Penyaluran Berhasil di Tambahkan');
    }

    public function edit($id)
    {
        $data = CekBansos::find($id);
        if (empty($data)) {
            # code...
            return redirect()->route('admin.penyaluran.index')->with('galat', 'Error Penyaluran');
        }

        return view('backend.penyaluran.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'tahapan' => 'required',
            'tanggal' => 'required',
            'status' => 'required'
        ]);

        $data = CekBansos::find($id);
        if (empty($data)) {
            # code...
            return redirect()->route('admin.penyaluran.index')->with('galat', 'Error Penyaluran');
        }

        $data->update([
            'tahapan' => $request->tahapan,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'alasan' => $request->alasan
        ]);

        return redirect()->route('admin.penyaluran.index')->with('success', 'Data penyaluran berhasil diupdate');
    }

    public function destroy($id)
    {
        $data = CekBansos::find($id);
        $data->delete();
        return redirect()->route('admin.penyaluran.index')->with('success', 'Data penyaluran berhasil dihapus');
    }
}
