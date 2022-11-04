@extends('layouts.mainDepartement')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa Aktif</h6>
        </div>
        <div class="card-body">
            <form class="user">
                <label for="">Mata Kuliah Wajib</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulwajib" placeholder="Mata Kuliah Wajib">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulwajib" placeholder="Mata Kuliah Wajib">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulwajib" placeholder="Mata Kuliah Wajib">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulwajib" placeholder="Mata Kuliah Wajib">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulwajib" placeholder="Mata Kuliah Wajib">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulwajib" placeholder="Mata Kuliah Wajib">
                </div>

                <label for="">Mata Kuliah Pilihan</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulpil" placeholder="Mata Kuliah Pilihan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulpil" placeholder="Mata Kuliah Pilihan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="matkulpil" placeholder="Mata Kuliah Pilihan">
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Submit
                </a>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
