@extends('layouts.dosenmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kartu Hasil Studi (KHS) Mahasiswa Perwalian</h6>
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
        <form action="/dashboarddosen/khs" method="GET">
            <div class="input-group p-3">
                <input type="search" class="form-control" placeholder="Cari nama mahasiswa" name="search" id="search">
                <button class="btn btn-outline-primary" type="submit">Button</button>
            </div>
        </form>
        <table class="table table-striped m-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Semester</th>
                    <th scope="col">SKS Semester</th>
                    <th scope="col">SKS Kumulatif</th>
                    <th scope="col">IP Semester</th>
                    <th scope="col">IP Kumulatif</th>
                    <th scope="col">Scan KHS</th>
                    <th scope="col">Status</th>
                    <th scope="col">Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datakhs as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->semester }}</td>
                        <td>{{ $item->skssemester }}</td>
                        <td>{{ $item->skskumulatif }}</td>
                        <td>{{ $item->ipsemester }}</td>
                        <td>{{ $item->ipkumulatif }}</td>
                        <td><img src="{{ asset('/storage/post-scankhs/' . $item->scankhs) }}" alt="{{ $item->scankhs }}"
                                width="250px" height="200px"></td>
                        <td>
                            @if ($item->isverified == 1)
                                <a href="/dashboarddosen/khs/unverify/{{ $item->id }}" class="btn btn-danger">Batal</a>
                            @else
                                <a href="/dashboarddosen/khs/verify/{{ $item->id }}"
                                    class="btn btn-success">Setujui</a>
                            @endif
                        </td>
                        <td><a href="/dashboarddosen/khs/download/{{ $item->id }}"
                                class="btn btn-facebook"">Download</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $datakhs->links() }}
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
