@extends('layouts.mainDepartement')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-secondary">
            <h6 class="m-0 font-weight-bold text-white">Daftar Mahasiswa DO</h6>
        </div>
        <form action="/dashboarddepartment/mhsdo" method="GET">
            <div class="input-group px-3 pt-3">
                <input type="search" class="form-control" placeholder="Cari Nama Mahasiswa" name="search" id="search">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </div>
        </form>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Detail Mahasiswa Drop Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataDO as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td><a href="/dashboarddepartment/mhsaktif/detail/{{ $item->id }}"
                                    class="btn btn-info">Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $dataDO->links() }}
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
    <!-- /.container-fluid -->
@endsection
