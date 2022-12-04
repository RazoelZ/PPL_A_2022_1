@extends('layouts.adminmain')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-secondary">
            <h6 class="m-0 font-weight-bold text-white">Daftar Berkas Mahasiswa</h6>
        </div>
        <div class="row p-3">
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    IRS</div>
                                @foreach ($datairs as $item)
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Semester = {{ $item->semester }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Jumlah SKS = {{ $item->jmlsks }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Scan SKS =
                                    </div>
                                    <img src="{{ asset('/storage/post-scansks/' . $item->scansks) }}"
                                        alt="{{ $item->scansks }}" width="250px" height="200px">
                                    <br><br>
                                    <a href="/dashboardadmin/viewuser/delete/irs/{{ $item['id'] }}"
                                        class="btn btn-danger">Hapus</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    PKL</div>
                                @foreach ($datapkl as $item)
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Semester = {{ $item->semester }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Instansi = {{ $item->instansi }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Dosen Pengampu =
                                        {{ $item->dosenpengampu }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Scan SKS = </div>
                                    <img src="{{ asset('/storage/post-scanpkl/' . $item->scanpkl) }}"
                                        alt="{{ $item->scanpkl }}" width="250px" height="200px">
                                    <br>
                                    <a href="/dashboardadmin/viewuser/delete/pkl/{{ $item['id'] }}"
                                        class="btn btn-danger">hapus</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    KHS</div>
                                @foreach ($datakhs as $item)
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Semester = {{ $item->semester }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> SKS Semester =
                                        {{ $item->skssemester }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> SKS Kumulatif =
                                        {{ $item->skskumulatif }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> IP Semester =
                                        {{ $item->ipsemester }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> IP Kumulatif =
                                        {{ $item->ipkumulatif }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Scan KHS
                                    </div>
                                    <img src="{{ asset('/storage/post-scankhs/' . $item->scankhs) }}"
                                        alt="{{ $item->scankhs }}" width="250px" height="200px">
                                    <br>
                                    <a href="/dashboardadmin/viewuser/delete/khs/{{ $item['id'] }}"
                                        class="btn btn-danger">hapus</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-h5">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    IRS</div>
                                @foreach ($dataskripsi as $item)
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Semester = {{ $item->semester }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Tanggal Sidang =
                                        {{ $item->tglsidang }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Dosen Pembimbing =
                                        {{ $item->dosenpembimbing }}
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> Scan SKS = </div>
                                    <img src="{{ asset('/storage/post-scansidang/' . $item->scansidang) }}"
                                        alt="{{ $item->scansidang }}" width="250px" height="200px"></td>
                                    <br><br>
                                    <a href="/dashboardadmin/viewuser/delete/skripsi/{{ $item['id'] }}"
                                        class="btn btn-danger">hapus</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <script>
        var tables = document.getElementsByTagName('table');
        var table = tables[tables.length - 1];
        var rows = table.rows;
        for (var i = 1, td; i < rows.length; i++) {
            td = document.createElement('td');
            td.appendChild(document.createTextNode(i + 0));
            rows[i].insertBefore(td, rows[i].firstChild);
        }
    </script>
@endsection
