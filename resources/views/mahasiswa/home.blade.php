@extends('layouts.main')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><strong>Dashboard</strong></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="card">
        <h5 class="card-header">Selamat Datang {{ auth()->user()->name }}</h5>
        <div class="card-body">
            <h1 class="card-title">{{ auth()->user()->name }}</h1>
            <h3 class="card-text">NIM</h3>
            <h5 class="card-text">{{ auth()->user()->nim }}</h5>
            <h3 class="card-text">Jurusan</h3>
            <h5 class="card-text">{{ auth()->user()->jurusan }}</h5>
            <h3 class="card-text">Angkatan</h3>
            <h5 class="card-text">{{ auth()->user()->angkatan }}</h5>
        </div>
    </div>
    <br>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-h5">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-h5">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                IRS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah Terisi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                KHS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah Terisi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">PKL
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Sudah Terisi</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Skripsi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah terisi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->
@endsection
