@extends('layouts.backend.master')
@section('title')
    Edit Penyaluran
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.penyaluran.update', $data->id) }}" method="POST">
                        @csrf @method('PATCH')
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahapan Penyaluran</label>
                                <input type="text" class="form-control" value="{{ $data->tahapan }}" name="tahapan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Penyaluran</label>
                                <input type="date" class="form-control" value="{{ $data->tanggal }}" name="tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Pilih Status Penyaluran</label>
                                <select class="form-select" aria-label="Default select example" name="status"
                                    id="status">
                                    <option value="diterima" {{ $data->status == 'diterima' ? 'selected' : '' }}>Diterima
                                    </option>
                                    <option value="ditolak" {{ $data->status == 'ditolak' ? 'selected' : '' }}>Ditolak
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3 {{ $data->status == 'diterima' ? 'd-none' : '' }}" id="ditolak">
                                <label for="exampleFormControlTextarea1" class="form-label">Tulis Alasan Ditolak</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="alasan" rows="3">{!! $data->alasan !!}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mt-4">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Perbaharui</span>
                            </button>
                        </div>
                    </form>
                </div>
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
