@extends('layouts.backend.master')
@section('title')
    Detail Penduduk : {{ $data->name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td>Nomor KK</td>
                                <td>:</td>
                                <td>{{ $data->nomor_kk }}</td>
                            </tr>
                            <tr>
                                <td>Nomor NIK</td>
                                <td>:</td>
                                <td>{{ $data->nomor_nik }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ $data->tempat_lahir }},
                                    {{ Carbon\Carbon::parse($data->tgl_lahir)->isoFormat('D MMMM Y') }}</td>
                            </tr>
                            <tr>
                                <td>Nomor RT RW</td>
                                <td>:</td>
                                <td>{{ $data->rt }}/{{ $data->rw }}</td>
                            </tr>
                            <tr>
                                <td>Status Keluarga</td>
                                <td>:</td>
                                <td>{{ $data->status_keluarga }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>:</td>
                                <td>{{ $data->pekerjaan == false ? 'Tetap' : 'Kontrak' }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('admin.penduduk.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
