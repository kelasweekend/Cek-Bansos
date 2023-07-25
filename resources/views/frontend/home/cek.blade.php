@extends('layouts.frontend.master')

@section('title')
    Cek Status Bansos Kamu
@endsection

<head>
    <link rel="icon" type="image/png" href="{{ asset('assets/fe/img/header.png') }}">
</head>

@section('content')
    <main>
        <section class="bansos">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card p-3 rounded-15 shadow-sm mb-5">
                            <h1 class="text-center">Pengecekan Bansos</h1>
                            <p class="text-center">
                                <a style="font-size: 20px"> <b>Untuk Penerima Bansos<br></b> </a>
                                <a style="color:red"> <b> Catatan: </b> </a>
                                    <a> Pengecekan ini hanya berlaku di daerah sekitaran kelurahan <br>
                                        <b>Rawa Badak Selatan </b> dan akan muncul jika memasukan <b>Nomor NIK</b>. <br>
                                        Bagi yang <a style="color: green"><b>Diterima</b></a>, bisa langsung mengecek bahan pangan <br>
                                        Dan, bagi yang <a style="color: red"><b>Ditolak</b></a>, silahkan melihat alasan. <br>
                                        Jika tidak menerima alasan tersebut bisa melaporkan ke <b>RT/RW</b> sekitar. <br>
                                    </a>
                            </p>

                            @if ($message = Session::get('galat'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Mohon Maaf!</strong> {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('cek_bansos') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text"
                                            class="form-control rounded-15 @error('nik') is-invalid @enderror"
                                            placeholder="Masukan NIK Penduduk" name="nik">
                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-success w-100"><i class="fa fa-search"></i>
                                            Cek</button>
                                    </div>
                                </div>
                            </form>

                            @if (!empty($data))
                                <table class="table table-striped mt-4 border border-dark rounded-15">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tahap</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $item->tahapan }}</td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>
                                                    @if ($item->status == 'diterima')
                                                        <span class="badge bg-success">Diterima</span>
                                                    @else
                                                        <span class="badge bg-danger">Ditolak</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $item->alasan ?? '-' }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <th colspan="4">Tidak ada Bantuan</th>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            body {
                background: linear-gradient(0deg, rgba(131, 219, 108, 1) 0%, rgba(127, 171, 149, 1) 50%, rgba(86, 164, 230, 1) 100%);
            }
        </style>
    </main>
@endsection
