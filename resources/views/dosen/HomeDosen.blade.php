@extends('layouts.dosenmain')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Departement</h1>
    </div>
    <!-- Content Row -->
    <div class="card">
        <h2 class="card-header h3 mb-0 text-gray-800">Selamat Datang {{ auth()->user()->name }}</h2>
        <div class="px-3 pt-3">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Mahasiswa Perwalian</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jmlmhs }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div id="piechartirs" style="width: 900px; height: 500px;">
                    </div>
                    <div>
                        <a href="/dashboarddosen/irs" class="btn btn-info h-0">IRS Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div id="piechartkhs" style="width: 900px; height: 500px;">
                    </div>
                    <div>
                        <a href="/dashboarddosen/khs" class="btn btn-info h-0">KHS Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div id="piechartpkl" style="width: 900px; height: 500px;">
                    </div>
                    <div>
                        <a href="/dashboarddosen/pkl" class="btn btn-info h-0">PKL Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div id="piechartskripsi" style="width: 900px; height: 500px;">
                    </div>
                    <div class="flex justify-content-end">
                        <a href="/dashboarddosen/skripsi" class="btn btn-info h-0">Skripsi Mahasiswa</a>
                    </div>
                </div>
            </div>



        </div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChartirs);

            function drawChartirs() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Belum Disetujui', {{ $irscountnotverified }}],
                    ['Sudah Disetujui', {{ $irscountverified }}],
                    ['Belum mengisi', {{ $irsbelum }}],
                ]);

                var options = {
                    title: 'Data IRS Perwalian'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechartirs'));

                chart.draw(data, options);
            }
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChartkhs);

            function drawChartkhs() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Belum Disetujui', {{ $khscountnotverified }}],
                    ['Sudah Disetujui', {{ $khscountverified }}],
                    ['Belum mengisi', {{ $khsbelum }}],
                ]);

                var options = {
                    title: 'Data KHS Perwalian'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechartkhs'));

                chart.draw(data, options);
            }

            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChartpkl);

            function drawChartpkl() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Belum Disetujui', {{ $pklcountnotverified }}],
                    ['Sudah Disetujui', {{ $pklcountverified }}],
                    ['Belum mengisi', {{ $pklbelum }}],
                ]);

                var options = {
                    title: 'Data PKL Perwalian'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechartpkl'));

                chart.draw(data, options);
            }

            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChartskripsi);

            function drawChartskripsi() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Belum Disetujui', {{ $skripsicountnotverified }}],
                    ['Sudah Disetujui', {{ $skripsicountverified }}],
                    ['Belum mengisi', {{ $skripsibelum }}],
                ]);

                var options = {
                    title: 'Data Skripsi Perwalian'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechartskripsi'));

                chart.draw(data, options);
            }
        </script>

        {{-- <div class="row">
                <!-- Earnings (Monthly) Card Example -->
{{-- 
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Irs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah disetujui =
                            {{ $irscountverified }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Belum disetujui =
                            {{ $irscountnotverified }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Belum mengisi =
                            {{ $irsbelum }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

        {{-- 
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                KHS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah disetujui =
                                {{ $khscountverified }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Belum disetujui =
                                {{ $khscountnotverified }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Belum mengisi =
                                {{ $khsbelum }}</div>
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
                                PKL</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah disetujui =
                                {{ $pklcountverified }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Belum disetujui =
                                {{ $pklcountnotverified }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Belum mengisi =
                                {{ $pklbelum }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-h5">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Mahasiswa Perwalian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sudah disetujui =
                                {{ $skripsicountverified }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Belum disetujui =
                                {{ $skripsicountnotverified }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Belum mengisi =
                                {{ $skripsibelum }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
