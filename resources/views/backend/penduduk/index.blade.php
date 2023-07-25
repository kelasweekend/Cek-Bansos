@extends('layouts.backend.master')
@section('title')
    List Penduduk
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="name" class="form-label">Cari Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" autocomplete="off" name="name"
                                        placeholder="Masukan Nama ..">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="basicSelect" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" autocomplete="off" id="basicSelect" name="gender">
                                    <option value="">-- Pilih --</option>
                                    <option {{ old('gender') == 'L' ? 'selected' : '' }} value="L">
                                        Laki - Laki
                                    </option>
                                    <option {{ old('gender') == 'P' ? 'selected' : '' }} value="P">
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                    <button onClick="window.location.reload()" class="btn btn-danger">
                                        <i class="bi bi-arrow-clockwise"></i> Reload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>NOMOR NIK</th>
                                    <th>RT RW</th>
                                    <th>GENDER</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $penduduk)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $penduduk->name }}</td>
                                        <td>{{ $penduduk->nomor_nik }}</td>
                                        <td class="text-bold-500">{{ $penduduk->rt }}/{{ $penduduk->rw }}</td>
                                        <td>
                                            @if ($penduduk->jenis_kelamin == 'L')
                                                Laki - Laki
                                            @else
                                                Perempuan
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a class="btn icon icon-left btn-info btn-sm me-3"
                                                href="{{ route('admin.penduduk.lihat', $penduduk->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                                Lihat data
                                            </a>

                                            <form method="POST"
                                                action="{{ route('admin.penduduk.destroy', $penduduk->id) }}">
                                                @csrf @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Apakah Kamu Yakin Menghapus Data Ini ?')"
                                                    class="btn icon icon-left btn-danger btn-sm delete"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                        </path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                        </path>
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Penduduk Masih Kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
