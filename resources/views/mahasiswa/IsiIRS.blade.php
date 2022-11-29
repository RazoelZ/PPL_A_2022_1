@extends('layouts.main')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Isi IRS Mahasiswa</h6>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <form class="user" method="POST" action="/dashboardmahasiswa/IsiIRSMahasiswa" enctype="multipart/form-data">
                @csrf
                <label for="semester">Semester Aktif</label>
                <div class="form-group">
                    <select
                        class="custom-select @error('semester')
                    is-invalid    
                    @enderror"
                        name="semester" id="semester" required>
                        <option selected disabled>Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
                        <option value="9">Semester 9</option>
                        <option value="10">Semester 10</option>
                        <option value="11">Semester 11</option>
                        <option value="12">Semester 12</option>
                        <option value="13">Semester 13</option>
                        <option value="14">Semester 14</option>
                        <option value="15">Semester 15</option>
                    </select>
                    @error('semester')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="jmlsks">Jumlah SKS</label>
                    <div class="form-group">
                        <input type="text"
                            class="form-control  @error('jmlsks')
                        is-invalid    
                        @enderror"
                            id="jmlsks" name="jmlsks" placeholder="Jumlah SKS" required value="{{ old('jmlsks') }}">
                        @error('jmlsks')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label for="scansks">Scan SKS</label>
                    <div class="form-group">
                        <input type="file"
                            class="form-control  @error('scansks')
                        is-invalid    
                        @enderror"
                            id="scansks" name="scansks" placeholder="Scan SKS" required value="{{ old('scansks') }}">
                        @error('scansks')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Submit
                    </button>
            </form>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->
@endsection
