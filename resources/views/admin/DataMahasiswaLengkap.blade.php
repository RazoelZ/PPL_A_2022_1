@extends('layouts.adminmain')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
        </div>
        <form action="/dashboardadmin/viewuser" method="GET">
            <div class="input-group p-3">
                <input type="search" class="form-control" placeholder="Cari user / level" name="search" id="search">
                <button class="btn btn-outline-primary" type="submit">Button</button>
            </div>
        </form>
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
                    <th scope="col">Dosen Wali</th>
                    <th scope="col">Status</th>
                    <th scope="col">Level</th>
                    <th scope="col">Edit Data</th>
                    <th scope="col">Edit Akun</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->angkatan }}</td>
                        <td>{{ $item->dosenwali }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->level }}</td>
                        @if ($item->level != 'user')
                            <td>
                                <p class="btn btn-danger">Tenaga Kerja</p>
                            </td>
                        @else
                            <td><a href="/dashboardadmin/viewuser/{{ $item->id }}" class="btn btn-warning">Edit</a></td>
                        @endif
                        <td><a href="/dashboardadmin/edituser/{{ $item->id }}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $mahasiswa->links() }}
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
