@extends('layouts.mainDepartement')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa Aktif</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Detail Mahasiswa Aktif</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataaktif as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['nim'] }}</td>
                            <td>{{ $item['jurusan'] }}</td>
                            <td>{{ $item['angkatan'] }}</td>
                            <td><a href="/dashboarddepartment/mhsaktif/detail/{{ $item['id'] }}"
                                    class="btn btn-info">Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
