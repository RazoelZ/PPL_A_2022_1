@extends('layouts.adminmain')

@section('container')
    <div class="container col-12">
        <div class=" bg-white mb-4 rounded-4 text-left mt-4">
            <form>
                <div class="col-md-12">
                    <label for="Mahasiswa" class="form-label"></label>
                    <h1 class="fs-1 text-center fw-bold">Data Lengkap Mahasiswa</h1>
                    <p class="text-center">Cari Mahasiswa</p>
                    <input type="text" class="form-control" id="Mahasiswa" placeholder="Contoh : Joko Subagyo">
                </div>
            </form>
            <br>
            <div class="text-center mx-auto">
                <button class="btn btn-info active" type="button">Cari</button>
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($mahasiswa as $m) :
                    ?>
                    <tr>
                        <td><?= $m->id ?></td>
                        <td><?= $m->name ?></td>
                        <td><?= $m->angkatan ?></td>
                        <td><a href="/dashboardadmin/edituser" class="text-center">Edit</a></td>
                        <td><a href="#" class="text-center" style="color: #FF0000">Delete</a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
@endsection