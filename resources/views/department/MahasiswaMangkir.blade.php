@extends('layouts.mainDepartement')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa Mangkir</h6>
        </div>
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
                @foreach ($datamangkir as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['nim'] }}</td>
                        <td>{{ $item['jurusan'] }}</td>
                        <td>{{ $item['angkatan'] }}</td>
                        <td><button class="btn btn-primary">detail</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- /.container-fluid -->
@endsection
