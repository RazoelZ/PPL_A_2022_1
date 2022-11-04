@extends('layouts.adminmain')

@section('container')
    <div class="container bg-white">
        <div class="row">
            <div class="col-6" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-3">
                        <img class="img-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
                    </div>
                    <div class="col-9" style="margin-top: 15px;">
                        <br>
                        <div><b>Beni Nugroho</b><br></div>
                        <div>Fakultas Sains dan Informatika<br></div>
                        <div>Universitas Diponegoro<br></div>
                        </ul>
                        <br><br>
                    </div>
                </div>
                <form method="POST" class="ms-3" autocomplete="on" action="">
                    <div class="mb-3 row mt-4">
                        <label for="admin" class="col-sm-3 col-form-label">Update Status</label>
                    </div>
                    <div class="mb-3 row">
                        <label for="admin" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Aktif</option>
                                <option value="1">Cuti</option>
                                <option value="2">Mangkir</option>
                                <option value="3">Drop Out</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </div>
                </form>
            </div>
            <div class="col-6 text-white" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-4 " style="width:15rem; height:14rem;background-color:#0E3B81;">
                            <h5 class="card-title text-center mt-3">IRS</h5>
                            <div class="card-body text-center mt-4">
                                <div class="card-text">
                                    <div>Sudah Mengisi :
                                        <!-- <.?php KONEK DATABASE ?> --><br><br>
                                    </div>
                                    <div>Belum Mengisi :
                                        <!-- <.?php KONEK DATABASE ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="width:15rem; height:14rem;background-color:#972126;">
                            <div class="card-body">
                                <h5 class="card-title text-center">KHS</h5>
                                <br>
                                <div class="card-text text-center mt-3">
                                    <div>Sudah Mengisi :
                                        <!-- <.?php KONEK DATABASE ?> --><br><br>
                                    </div>
                                    <div>Belum Mengisi :
                                        <!-- <.?php KONEK DATABASE ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card" style="width:15rem; height:14rem;background-color:#C98400;">
                            <h5 class="card-title text-center mt-3">IRS</h5>
                            <div class="card-body text-center mt-2">
                                <div class="card-text">
                                    <div>Sedang Berjalan :
                                        <!-- <.?php KONEK DATABASE ?> --><br><br>
                                    </div>
                                    <div>Belum Berjalan :
                                        <!-- <.?php KONEK DATABASE ?> --><br><br>
                                    </div>
                                    <div>Lulus :
                                        <!-- <.?php KONEK DATABASE ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="width:15rem; height:14rem;background-color:#2F6146;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Skripsi</h5>
                                <br>
                                <div class="card-text text-center">
                                    <div>Sedang Berjalan :
                                        <!-- <.?php KONEK DATABASE ?> --><br><br>
                                    </div>
                                    <div>Belum Berjalan :
                                        <!-- <.?php KONEK DATABASE ?> --><br><br>
                                    </div>
                                    <div>Lulus :
                                        <!-- <.?php KONEK DATABASE ?> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    @endsection
