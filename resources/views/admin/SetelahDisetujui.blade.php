@extends('layouts.adminmain')

@section('container')
    <div class="container">
        <div class=" bg-white mx-3 mb-4 rounded-4 text-left mt-4">
            <form>
                <div class="col-md-12">
                    <label for="Mahasiswa" class="form-label"></label>
                    <p class="fs-1 text-center fw-bold text-primary">Berhasil Disetujui</p>
                    <p class="text-center">Mahasiswa dengan Nama Joko Subagyo dengan NIM 24060120140144
                        tidak lagi bisa mengubah IRS kecuali ada pembatalan persetujuan </p>
                    <!-- Page Heading -->
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengajuan IRS</h6>
                        </div>
                        <div class="card-body">
                            <form class="user">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Wajib (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Wajib (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Wajib (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Wajib (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Wajib (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Wajib (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Pilihan (X SKS)">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Mata Kuliah Pilihan (X SKS)">
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-outline-primary" type="button">Lihat Data Lengkap</button>
                                        <button class="btn btn-outline-primary" type="button">Batalkan persetujuan</button>
                                    </div>
                                    </a>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    @endsection
