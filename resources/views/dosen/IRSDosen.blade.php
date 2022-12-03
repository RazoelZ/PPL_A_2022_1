@extends('layouts.dosenmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container col-10">
        <div class=" bg-white mb-4 rounded-4 text-left mt-4">
            <form>
                <div class="col-md-12">
                    <label for="Mahasiswa" class="form-label"></label>
                    <h1 class="fs-1 text-center fw-bold">IRS Mahasiswa</h1>
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
                        <th scope="col">nama</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Scan SKS</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datairs as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>{{ $item->jmlsks }}</td>
                            <td><img src="{{ asset('/storage/post-scansks/' . $item->scansks) }}" alt="{{ $item->scansks }}"
                                    width="250px" height="200px"></td>
                            <td>
                                @if ($item->isverified == 1)
                                    <a href="/dashboarddosen/irs/unverify/{{ $item->id }}"
                                        class="btn btn-danger">Batal</a>
                                @else
                                    <a href="/dashboarddosen/irs/verify/{{ $item->id }}"
                                        class="btn btn-success">Setujui</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datairs->links() }}
        </div>
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
