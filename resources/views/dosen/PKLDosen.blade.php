@extends('layouts.dosenmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-secondary">
            <h6 class="m-0 font-weight-bold text-white">Praktik Kerja Lapangan (PKL) Mahasiswa Perwalian</h6>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('gagal') }}
            </div>
        @endif
        <form action="/dashboarddosen/pkl" method="GET">
            <div class="input-group p-3">
                <input type="search" class="form-control" placeholder="Cari Nama Mahasiswa / Dosen Pengampu" name="search"
                    id="search">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </div>
        </form>
        <table class="table table-striped m-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Instansi</th>
                    <th scope="col">Dosen Pengampu</th>
                    <th scope="col">Scan PKL</th>
                    <th scope="col">Status</th>
                    <th scope="col">Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datapkl as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->semester }}</td>
                        <td>{{ $item->instansi }}</td>
                        <td>{{ $item->dosenpengampu }}</td>
                        <td><img src="{{ asset('/storage/post-scanpkl/' . $item->scanpkl) }}" alt="{{ $item->scanpkl }}"
                                width="250px" height="200px"></td>
                        <td>
                            @if ($item->isverified == 1)
                                <a href="/dashboarddosen/pkl/unverify/{{ $item->id }}" class="btn btn-danger">Batal</a>
                            @else
                                <a href="/dashboarddosen/pkl/verify/{{ $item->id }}" class="btn btn-success">Setujui</a>
                            @endif
                        </td>
                        <td><a href="/dashboarddosen/pkl/download/{{ $item->id }}"
                                class="btn btn-facebook"">Download</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $datapkl->links() }}
    </div>
    </body>
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
