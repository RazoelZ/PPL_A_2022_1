@extends('layouts.dosenmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container col-10">
        <div class=" bg-white mb-4 rounded-4 text-left mt-4">
            <form>
                <div class="col-md-12">
                    <label for="Mahasiswa" class="form-label"></label>
                    <h1 class="fs-1 text-center fw-bold">PKL Mahasiswa</h1>
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
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Instansi</th>
                        <th scope="col">Dosen Pengampu</th>
                        <th scope="col">Scan PKL</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datapkl as $item)
                        <?php
                        // dd($item);
                        $user = App\Models\User::where('id', '=', $item['userid'])
                            ->get()
                            ->toarray();
                        // dd($user);
                        ?>
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $user[0]['name'] }}</td>
                            <td>{{ $item['semester'] }}</td>
                            <td>{{ $item['instansi'] }}</td>
                            <td>{{ $item['dosenpengampu'] }}</td>
                            <td>{{ $item['scanpkl'] }}</td>
                            <td><button type="button" class="btn btn-success">Setujui</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </body>
@endsection
