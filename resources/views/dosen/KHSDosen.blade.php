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
                        <th scope="col">#</th>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Rendi</td>
                        <td>Semester 5 </td>
                        <td>21</td>
                        <td>80</td>
                        <td>34.4</td>
                        <td>36.5</td>
                        <td>scanpkl.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jiwa</td>
                        <td>Semester 5 </td>
                        <td>21</td>
                        <td>80</td>
                        <td>34.4</td>
                        <td>36.5</td>
                        <td>scanpkl.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Aryo</td>
                        <td>Semester 5 </td>
                        <td>21</td>
                        <td>80</td>
                        <td>34.4</td>
                        <td>36.5</td>
                        <td>scanpkl.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Farhan</td>
                        <td>Semester 5 </td>
                        <td>21</td>
                        <td>80</td>
                        <td>34.4</td>
                        <td>36.5</td>
                        <td>scanpkl.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Vigy</td>
                        <td>Semester 5 </td>
                        <td>21</td>
                        <td>80</td>
                        <td>34.4</td>
                        <td>36.5</td>
                        <td>scanpkl.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
