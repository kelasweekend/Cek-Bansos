<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data = Penduduk::all();
        return view('backend.penduduk.index', compact('data'));
    }

    public function lihat($id)
    {
        $data = Penduduk::find($id);
        return view('backend.penduduk.view', compact('data'));
    }

    public function destroy($id)
    {
        $data = Penduduk::find($id);
        $data->delete();
        return redirect()->route('admin.penduduk.index')->with('success', 'Penduduk Berhasil di Hapus');
    }
}
