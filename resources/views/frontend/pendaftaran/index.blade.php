@extends('layouts.frontend.master')

@section('title')
    Pendaftaran Akun Penerima Bansos
@endsection

<head>
    <link rel="icon" type="image/png" href="{{ asset('assets/fe/img/header.png') }}">
</head>

@section('content')
    <main>
        <section class="daftar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card p-3 rounded-15 shadow-sm ">
                            <h1 class="text-center">Pendaftaran Form Bansos</h1>
                            <p class="text-center">
                                <a style="color:red"> <b> Catatan: </b> </a>
                                Pendaftaraan ini hanya berlaku di daerah <b>Rawa Badak Selatan</b> <br>
                                Jika diluar daerah tersebut akan <a style="color:red"> ditolak</a>. <br>
                                Isi dengan <a style="color:green"> jujur</a>, karena RT/RW akan mengecek data yang
                                bersangkutan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-8">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Terima Kasih!</strong> {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($message = Session::get('galat'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Mohon Maaf !</strong> {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route('pendaftaraan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" name="name" id="inputname">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Nomor KK</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('kk') is-invalid @enderror"
                                        value="{{ old('kk') }}" name="kk" id="inputname">
                                    @error('kk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Nomor NIK</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                        value="{{ old('nik') }}" name="nik" id="inputname">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Tempat/Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                                        value="{{ old('tempat') }}" name="tempat" id="inputname">
                                    @error('tempat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control @error('lahir') is-invalid @enderror"
                                        value="{{ old('lahir') }}" max="{{ date('Y-m-d') }}" name="lahir"
                                        id="inputname">
                                    @error('lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{!! old('alamat') !!}</textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select class="form-select @error('jk') is-invalid @enderror" name="jk"
                                        aria-label="Default select example">
                                        <option value="">-- Pilih --</option>
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    @error('jk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">RT / RW</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control @error('rt') is-invalid @enderror"
                                        value="{{ old('rt') }}" name="rt" id="inputname">
                                    @error('rt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control @error('rw') is-invalid @enderror"
                                        value="{{ old('rw') }}" name="rw" id="inputname">
                                    @error('rw')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Kelurahan / Kecamatan</label>
                                <div class="col-sm-9">
                                    <p class="mt-2">RBS/Koja</p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Status Dalam Keluarga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('status') is-invalid @enderror"
                                        value="{{ old('status') }}" name="status">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            <h2 class="text-center">Pendaftaran Penerimaan Bantuan Sosial</h2>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Status Kepemilikan Rumah</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('rumah') is-invalid @enderror"
                                            type="radio" name="rumah" id="tetap" value="tetap">
                                        <label class="form-check-label" for="tetap">Tetap</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('rumah') is-invalid @enderror"
                                            type="radio" name="rumah" id="kontrak" value="kontrak">
                                        <label class="form-check-label" for="kontrak">Kontrak</label>
                                    </div>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Status Pekerjaan</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('pekerjaan') is-invalid @enderror"
                                            type="radio" name="pekerjaan" id="kontrak" value="false">
                                        <label class="form-check-label" for="kontrak">PHK / Tidak Bekerja</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('pekerjaan') is-invalid @enderror"
                                            type="radio" name="pekerjaan" id="kerja" value="true">
                                        <label class="form-check-label" for="kerja">Pekerja Tetap</label>
                                    </div>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Jumlah Kendaraan Roda 2</label>
                                <div class="col-sm-9">
                                    <input type="number" min="0"
                                        class="form-control @error('motor') is-invalid @enderror"
                                        value="{{ old('motor') }}" name="motor">
                                    @error('motor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Jumlah Kendaraan Roda 4</label>
                                <div class="col-sm-9">
                                    <input type="number" min="0"
                                        class="form-control @error('mobil') is-invalid @enderror"
                                        value="{{ old('mobil') }}" name="mobil">
                                    @error('mobil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputname" class="col-sm-3 col-form-label">Pendapatan Bulanan</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('penghasilan') is-invalid @enderror"
                                        value="{{ old('penghasilan') }}" name="penghasilan">
                                    @error('penghasilan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-5 mb-5">
                                <button type="submit" class="btn btn-success w-100">Ajukan Sekarang</button>
                            </div>
                        </form>
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
