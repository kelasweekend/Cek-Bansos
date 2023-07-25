@extends('layouts.backend.master')
@section('title')
    Kelola Penyaluran Bansos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>@yield('title')</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah"><i
                                class="bi bi-plus-square me-2"></i>Tambah Penyaluran</button>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Mohon Maaf !</strong> Mohon isi semua kolom form
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
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
                                <label for="basicSelect" class="form-label">Tahapan</label>
                                <select class="form-control" autocomplete="off" id="basicSelect" name="status">
                                    <option value="">-- Pilih --</option>
                                    <option {{ old('status') == 'diterima' ? 'selected' : 'diterima' }} value="diterima">
                                        Diterima
                                    </option>
                                    <option {{ old('status') == 'ditolak' ? 'selected' : 'ditolak' }} value="ditolak">
                                        Ditolak
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
                                    <th>Nomor NIK</th>
                                    <th>TAHAPAN</th>
                                    <th>STATUS</th>
                                    <th>TANGGAL</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $cek)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $cek->penduduk->name }}</td>
                                        <td>{{ $cek->penduduk->nomor_nik }}</td>
                                        <td>{{ $cek->tahapan }}</td>
                                        <td>
                                            @if ($cek->status == 'diterima')
                                                <span class="badge bg-success">Diterima</span>
                                            @else
                                                <span class="badge bg-danger">Ditolak</span>
                                            @endif
                                        </td>
                                        <td>{{ $cek->tanggal }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.penyaluran.edit', $cek->id) }}"
                                                class="btn icon icon-left btn-info btn-sm me-3"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                                Ubah data
                                            </a>

                                            <form method="POST" action="{{ route('admin.penyaluran.destroy', $cek->id) }}">
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
                                        <td colspan="6" class="text-center">Penyaluran Penduduk Masih Kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- pop up tambah --}}
    <div class="modal fade text-left" id="tambah" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">
                        Tambah Penyaluran
                    </h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form action="{{ route('admin.penyaluran.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Pilih Penduduk</label>
                            <select class="form-select" aria-label="Default select example" name="penduduk_id">
                                <option selected>-- Pilih --</option>
                                @foreach ($user as $penduduk)
                                    <option value="{{ $penduduk->id }}">{{ $penduduk->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tahapan Penyaluran</label>
                            <input type="text" class="form-control" name="tahapan">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Penyaluran</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label for="">Pilih Status Penyaluran</label>
                            <select class="form-select" aria-label="Default select example" name="status"
                                id="status">
                                <option selected>-- Pilih --</option>
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </div>
                        <div class="mb-3 d-none" id="ditolak">
                            <label for="exampleFormControlTextarea1" class="form-label">Tulis Alasan Ditolak</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="alasan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $("#status").change(PopUp_Tambah);

        function PopUp_Tambah() {
            var status = $("#status option:selected").val();
            console.log(status);
            if (status == 'ditolak') {
                $('#ditolak').removeClass('d-none');
            } else {
                $('#ditolak').addClass('d-none');
            }
        }
    </script>
@endsection
