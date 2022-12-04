@extends('layouts.mainDepartement')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Departement</h1>
    </div>
    <div class="card">
        <h2 class="card-header h3 mb-0 text-gray-800">Selamat Datang {{ auth()->user()->name }}</h2>
        <div class="row pt-3 px-3">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total mahasiswa Aktif</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataAktif }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Total Mahasiswa DO</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataDO }}</div>
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
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Mahasiswa Cuti
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $dataCuti }}</div>
                                    </div>
                                </div>
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
                                    Total Mahasiswa Mangkir</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataMangkir }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-3" id="barchart_material" style="width: 1200px; height: 500px;"></div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Aktif', 'Cuti', 'Mangkir', 'Dropout'],
                ['2019', {{ $dataAktif2019 }}, {{ $dataCuti2019 }}, {{ $dataMangkir2019 }},
                    {{ $dataDropout2019 }}
                ],
                ['2020', {{ $dataAktif2020 }}, {{ $dataCuti2020 }}, {{ $dataMangkir2020 }},
                    {{ $dataDropout2020 }}
                ],
                ['2021', {{ $dataAktif2021 }}, {{ $dataCuti2021 }}, {{ $dataMangkir2021 }},
                    {{ $dataDropout2021 }}
                ],
                ['2022', {{ $dataAktif2022 }}, {{ $dataCuti2022 }}, {{ $dataMangkir2022 }},
                    {{ $dataDropout2022 }}
                ]
            ]);

            var options = {
                chart: {
                    title: 'Total Mahasiswa',
                    subtitle: 'Aktif, Cuti, Mangkir, Dropout: Angkatan 2019-2022',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
    <!-- /.container-fluid -->
@endsection
