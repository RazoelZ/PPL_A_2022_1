@extends('layouts.adminmain')

@section('container')
    <div class="row">
        <div class="col-2">
            <img class="img-profile rounded-circle" style="width: 200px; height:200px;" src="{{ asset('assets/img/admin.jpg') }}">
        </div>
        <div class="col-9" style="margin-top: 15px;">
            <br>
            <h3>{{ auth()->user()->name }}</h3>
            <h3>{{ auth()->user()->jurusan }}</h3>
            <h3>Universitas Diponegoro</h3>
        </div>
    </div>
    <br>
    <div class="card">
        <h2 class="card-header h3 mb-0 text-gray-800"><b>Selamat Datang, {{ auth()->user()->name }}</b></h2>

        <div class="row pt-3 px-3">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    User Admin</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admin }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    User Mahasiswa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswa }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">User Dosen</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dosen }}</div>
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
                                    User Departement</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $department }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3 px-3">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    User Aktif</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $useractivecount }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    User Mangkir</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userMangkircount }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    User Cuti</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userCuticount }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    User Operator</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userOperatorcount }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row pt-3">
                <div class="ml-4" id="piechart" style="width: 600px; height: 500px;"></div>
                <div id="piechart1" style="width: 600px; height: 500px;"></div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['User', 'Status'],
                ['Aktif', {{ $useractivecount }}],
                ['Mangkir', {{ $userMangkircount }}],
                ['Cuti', {{ $userCuticount }}],
                ['Operator', {{ $userOperatorcount }}],
            ]);

            var options = {
                title: 'Status User'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }

        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {

            var data = google.visualization.arrayToDataTable([
                ['User', 'Level'],
                ['Mahasiswa', {{ $mahasiswa }}],
                ['Dosen', {{ $dosen }}],
                ['Department', {{ $department }}],
                ['Admin', {{ $admin }}],
            ]);

            var options = {
                title: 'User Level'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        }
    </script>
@endsection
