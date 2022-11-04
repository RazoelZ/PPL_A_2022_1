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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Rina</td>
                        <td>Semester 5 </td>
                        <td>Gudang Garam</td>
                        <td>Aryo Pradana</td>
                        <td>scanpkl.pdf</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Rina</td>
                        <td>Semester 5</td>
                        <td>Surya</td>
                        <td>Aryo Pradana</td>
                        <td>scanpkl.pdf</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Rina</td>
                        <td>Semester 5</td>
                        <td>PT Maju Mundur</td>
                        <td>Aryo Pradana</td>
                        <td>scanpkl.pdf</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Rina</td>
                        <td>Semester 5</td>
                        <td>Surya</td>
                        <td>Aryo Pradana</td>
                        <td>scanpkl.pdf</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </body>
@endsection