@extends('layouts.adminmain')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-secondary">
            <h6 class="m-0 font-weight-bold text-white">Daftar User Sistem Informasi</h6>
        </div>
        <form action="/dashboardadmin/lihatuser" method="GET">
            <div class="input-group p-3">
                <input type="search" class="form-control" placeholder="Cari user" name="search" id="search">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </div>
        </form>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM/NIP</th>
                    <th scope="col">Status</th>
                    <th scope="col">Level</th>
                    <th scope="col">Delete User</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datauser as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->level }}</td>
                        <td><a href="/dashboardadmin/lihatuser/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
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
