@extends('layouts.dosenmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container col-10">
        <div class=" bg-white mb-4 rounded-4 text-left mt-4">
            <form>
                <div class="col-md-12">
                    <label for="Mahasiswa" class="form-label"></label>
                    <h1 class="fs-1 text-center fw-bold">KHS Mahasiswa</h1>
                    <p class="text-center">Cari Mahasiswa</p>
                    <input type="text" class="form-control" id="Mahasiswa" placeholder="Contoh : Joko Subagyo">
                </div>
            </form>
            <br>
            <div class="text-center mx-auto">
                <button class="btn btn-primary active" type="button">Cari</button>
            </div>
            <br>
            <table class="table table-striped">
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
                                    <a href="/dashboarddosen/khs/unverify/{{ $item->id }}"
                                        class="btn btn-danger">Batal</a>
                                @else
                                    <a href="/dashboarddosen/khs/verify/{{ $item->id }}"
                                        class="btn btn-success">Setujui</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datakhs->links() }}
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
