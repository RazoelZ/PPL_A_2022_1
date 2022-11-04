@extends('layouts.main')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Isi PKL Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="/dashboardmahasiswa/IsiPKLMahasiswa">
                @csrf
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
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
                    <label for="instansi">Instansi</label>
                    <div class="form-group">
                        <input type="text"
                            class="form-control  @error('instansi')
                        is-invalid    
                        @enderror"
                            id="instansi" name="instansi" placeholder="Instansi" required value="{{ old('instansi') }}">
                        @error('instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label for="dosenpengampu">Dosen Pengampu</label>
                    <div class="form-group">
                        <input type="text"
                            class="form-control  @error('dosenpengampu')
                        is-invalid    
                        @enderror"
                            id="dosenpengampu" name="dosenpengampu" placeholder="Dosen Pengampu" required
                            value="{{ old('dosenpengampu') }}">
                        @error('dosenpengampu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label for="scanpkl">Scan PKL</label>
                    <div class="form-group">
                        <input type="file"
                            class="form-control  @error('scanpkl')
                        is-invalid    
                        @enderror"
                            id="scanpkl" name="scanpkl" placeholder="Scan PKL" required value="{{ old('scanpkl') }}">
                        @error('scanpkl')
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
