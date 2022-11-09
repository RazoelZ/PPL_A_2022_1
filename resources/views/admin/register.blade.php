@extends('layouts.adminmain')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('logingagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('logingagal') }}
        </div>
    @endif
    <form class="user p-5" action="/dashboardadmin/register" method="POST">
        @csrf
        <label for="name">Nama</label>
        <div class="form-group">
            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name"
                placeholder="Your name" required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="email">E-Mail</label>
        <div class="form-group">
            <input type="email" name="email" class="form-control    @error('email') is-invalid @enderror" id="email"
                placeholder="Email Address" required value="{{ old('email') }}">
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
                id="nim" name="nim" placeholder="Masukkan NIM anda" required value="{{ old('nim') }}">
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
                id="jurusan" name="jurusan" placeholder="Masukkan jurusan anda" required value="{{ old('jurusan') }}">
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
                id="angkatan" name="angkatan" placeholder="Masukkan Angkatan anda" required value="{{ old('angkatan') }}">
            @error('angkatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="level">level Aktif</label>
        <div class="form-group">
            <select class="form-control @error('level')
            is-invalid    
            @enderror" name="level"
                id="level" required>
                <option selected disabled>level</option>
                <option value="user">User</option>
                <option value="dosen">Dosen</option>
                <option value="admin">Admin</option>
                <option value="department">department</option>
            </select>
            @error('level')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror""
                    id="password" placeholder="Input your password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary btn-user btn-block" type="submit">
                Register
            </button>
    </form>
@endsection
