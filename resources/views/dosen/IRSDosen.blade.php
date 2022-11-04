@extends('layouts.dosenmain')

@section('container')
    <!-- Begin Page Content -->
    <div class="container col-10">
        <div class=" bg-white mb-4 rounded-4 text-left mt-4">
            <form>
                <div class="col-md-12">
                    <label for="Mahasiswa" class="form-label"></label>
                    <p class="fs-1 text-center fw-bold">IRS Mahasiswa</p>
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
                        <th scope="col">nama</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Scan SKS</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <th scope="row">1</th>
                        <td>Joko</td>
                        <td>Semester 1</td>
                        <td>21</td>
                        <td>scansks.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Alif</td>
                        <td>Semester 1</td>
                        <td>22</td>
                        <td>scansks.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>David</td>
                        <td>Semester 1</td>
                        <td>24</td>
                        <td>scansks.pdf</td>
                        <td><button type="button" class="btn btn-success">Setujui</button>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
    </body>
@endsection
