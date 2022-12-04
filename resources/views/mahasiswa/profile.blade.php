@extends('layouts.main')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-secondary">
            <h6 class="m-0 font-weight-bold text-white">Isi Data Diri Mahasiswa</h6>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <form class="user" method="POST" action="/dashboardmahasiswa/profile/edit">
                @method('put')
                @csrf
                <label for="name">Nama</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                         @error('name')
                    is-invalid    
                    @enderror"
                        id="name" name="name" placeholder="Masukkan nama anda"
                        value="{{ old('name', auth()->user()->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="email">E-mail</label>
                <div class="form-group">
                    <input type="email"
                        class="form-control 
                    @error('email')
                    is-invalid    
                    @enderror"
                        id="email" name="email" placeholder="Masukkan Email anda"
                        value="{{ old('email', auth()->user()->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="nim">NIM</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                    @error('nim')
                    is-invalid    
                    @enderror"
                        id="nim" name="nim" placeholder="Masukkan NIM anda" required
                        value="{{ old('nim', auth()->user()->nim) }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="jurusan">Jurusan</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                    @error('jurusan')
                    is-invalid    
                    @enderror"
                        id="jurusan" name="jurusan" placeholder="Masukkan jurusan anda" required
                        value="{{ old('jurusan', auth()->user()->jurusan) }}">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="angkatan">Angkatan</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                         @error('angkatan')
                    is-invalid    
                    @enderror"
                        id="angkatan" name="angkatan" placeholder="Masukkan Angkatan anda" required
                        value="{{ old('angkatan', auth()->user()->angkatan) }}">
                    @error('angkatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="alamat">Alamat</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                         @error('alamat')
                    is-invalid    
                    @enderror"
                        id="alamat" name="alamat" placeholder="Masukkan alamat anda" required
                        value="{{ old('alamat', auth()->user()->alamat) }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="nomortlp">Nomor Telepon</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                         @error('nomortlp')
                    is-invalid    
                    @enderror"
                        id="nomortlp" name="nomortlp" placeholder="Masukkan Nomor Telepon anda" required
                        value="{{ old('nomortlp', auth()->user()->nomortlp) }}">
                    @error('nomortlp')
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
    <!-- /.container-fluid -->
@endsection
