@extends('layouts.mainDepartement')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Mahasiswa {{ $dataaktif['status'] }}</h6>
        </div>
        <div class="card-body">
            <label>Nama</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['name'] }}" disabled>
            </div>
            <label>E-mail</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['email'] }}" disabled>
            </div>
            <label>NIM</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['nim'] }}" disabled>
            </div>
            <label>Jurusan</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['jurusan'] }}" disabled>
            </div>
            <label>Angkatan</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['angkatan'] }}" disabled>
            </div>
            <label>Dosen Wali</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['dosenwali'] }}" disabled>
            </div>
            <label>Alamat</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['alamat'] }}" disabled>
            </div>
            <label>Nomor Telepon</label>
            <div class="form-group">
                <input type="text" class="form-control" value="{{ $dataaktif['nomortlp'] }}" disabled>
            </div>
            <div class="button-blue">
                <a href="{{ url()->previous() }}">Back</a>
            </div>
        </div>
    </div>
@endsection
