@extends('layouts.adminmain')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
        </div>
        <table class="table table-striped">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Level</th>
                    <th scope="col">Edit Data</th>
                    <th scope="col">Edit Akun</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item['nim'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['angkatan'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['level'] }}</td>
                        <td><a href="/dashboardadmin/viewuser/{{ $item['id'] }}" class="btn btn-warning">Edit</a></td>
                        <td><a href="/dashboardadmin/edituser/{{ $item['id'] }}" class="btn btn-info">Edit</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
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
