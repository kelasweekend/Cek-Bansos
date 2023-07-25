<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CekBansos;
use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('frontend.home.index', compact('data'));
    }

    public function detail($slug)
    {
        $data = Blog::whereSlug($slug)->first();
        if (empty($data)) {
            # code...
            abort(404);
        }
        return view('frontend.home.detail', compact('data'));
    }

    public function pendaftaraan()
    {
        return view('frontend.pendaftaran.index');
    }

    private function kriteriaIndikator($request)
    {
        $statusDiterima = null;

        if (
            $request->rumah === "kontrak" &&
            intval($request->mobil) >= 0 &&
            intval($request->motor) >= 2 &&
            $request->pekerjaan === "false" &&
            intval($request->penghasilan) < 600000
        ) {
            $statusDiterima = 'layak';
        } else {
            $statusDiterima = 'tidak';
        }

        // dd($request->all());
        // dd($statusDiterima);
        return $statusDiterima;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kk' => 'required|numeric',
            'nik' => 'required|numeric',
            'tempat' => 'required',
            'lahir' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'status' => 'required',
            'pekerjaan' => 'required',
            'rumah' => 'required',
            'motor' => 'required|numeric|min:0',
            'mobil' => 'required|numeric|min:0',
            'penghasilan' => 'required|numeric',
        ], [
            'name.required' => 'Nama Wajib Di Isi',
            'kk.required' => 'KK Wajib Di Isi',
            'nik.required' => 'NIK Wajib Di Isi',
            'tempat.required' => 'Tempat Wajib Di Isi',
            'lahir.required' => 'Kelahiran Wajib Di Isi',
            'alamat.required' => 'Alamat Wajib Di Isi',
            'jk.required' => 'Jenis Kelamin Wajib Di Isi',
            'rt.required' => 'RT Wajib Di Isi',
            'rw.required' => 'RW Wajib Di Isi',
            'status.required' => 'Status Wajib Di Isi',
        ]);

        if ($this->kriteriaIndikator($request) == 'tidak') {
            # code...
            return redirect()->route('pendaftaraan')->with('galat', 'Anda Belum Memenuhi Kriteria Penerimaan Bantuan');
        } else {
            # code...
            Penduduk::create([
                'name' => $request->name,
                'nomor_kk' => $request->kk,
                'nomor_nik' => $request->nik,
                'tempat_lahir' => $request->tempat,
                'tgl_lahir' => $request->lahir,
                'jenis_kelamin' => $request->jk,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'status_keluarga' => $request->status,
                'pekerjaan' => $request->pekerjaan == 'true' ? true : false,
                'rumah' => $request->rumah,
                'mobil' => $request->mobil,
                'motor' => $request->motor,
                'penghasilan' => $request->penghasilan
            ]);
            return redirect()->route('pendaftaraan')->with('success', 'Pendaftaran Berhasil dibuat');
        }
    }

    public function forgetpassword()
    {
        return view('frontend.forgetpassword.index');
    }

    public function cek()
    {
        return view('frontend.home.cek');
    }

    public function cek_bansos(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric'
        ]);

        $check = Penduduk::where('nomor_nik', $request->nik)->first();

        if (empty($check)) {
            # code...
            return redirect()->route('cek')->with('galat', 'NIK Tidak Terdaftar');
        }

        $data = CekBansos::where('penduduk_id', $check->id)->get();
        // dd($data);

        return view('frontend.home.cek', compact('data'));
    }
}
