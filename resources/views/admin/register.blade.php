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

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftarkan User</h6>
        </div>
        <form class="user p-5" action="/dashboardadmin/register" method="POST">
            @csrf
            <label for="name">Nama<sup class="text-danger">*</sup></label>
            <div class="form-group">
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                    id="name" placeholder="Your name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label for="email">E-Mail<sup class="text-danger">*</sup></label>
            <div class="form-group">
                <input type="email" name="email" class="form-control    @error('email') is-invalid @enderror"
                    id="email" placeholder="Email Address" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label for="nim">NIM<sup class="text-danger">*</sup></label>
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
            <label for="jurusan">Jurusan<sup class="text-danger">*</sup></label>
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
            <label for="angkatan">Angkatan<sup class="text-danger">*</sup></label>
            <div class="form-group">
                <input type="text"
                    class="form-control 
                             @error('angkatan')
                        is-invalid    
                        @enderror"
                    id="angkatan" name="angkatan" placeholder="Masukkan Angkatan anda" required
                    value="{{ old('angkatan') }}">
                @error('angkatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <label for="dosenwali">Masukkan dosen wali (jika user mahasiswa)<sup class="text-danger">*</sup></label>
            <div class="form-group">
                <select
                    class="form-control @error('dosenwali')
                is-invalid    
                @enderror mb-3"
                    name="dosenwali" id="dosenwali" required>
                    <option selected disabled>Dosen Wali</option>
                    <option value="Prabowo Nur Khalid">Prabowo Nur Khalid</option>
                    <option value="Yos Sudarso">Yos Sudarso</option>
                    <option value="Arum Ningtyas">Arum Ningtyas</option>
                    <option value="Fajar Wulandari">Fajar Wulandari</option>
                    <option value="Nurul Rini">Nurul Rini</option>
                    <option value="Mila Kartika Cantika">Mila Kartika Cantika</option>
                    <option value="Aji Eko Kurniawan">Aji Eko Kurniawan</option>
                </select>
                @error('dosenwali')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <label for="level">level Aktif<sup class="text-danger">*</sup></label>
                <div class="form-group">
                    <select
                        class="form-control @error('level')
                is-invalid    
                @enderror mb-3"
                        name="level" id="level" required>
                        <option selected disabled>level</option>
                        <option value="user">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                        <option value="admin">Admin</option>
                        <option value="department">Departemen</option>
                    </select>
                    @error('level')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="status">Status<sup class="text-danger">*</sup></label>
                    <div class="form-group">
                        <select
                            class="form-control @error('status')
                    is-invalid    
                    @enderror mb-3"
                            name="status" id="status" required>
                            <option selected disabled>Status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Mangkir">Mangkir</option>
                            <option value="Cuti">Cuti</option>
                            <option value="Dropout">Dropout</option>
                            <option value="operator">Operator</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password">Password<sup class="text-danger">*</sup></label>
                        <div class="form-group">
                            <input type="password" name="password"
                                class="form-control  @error('password') is-invalid @enderror"" id="password"
                                placeholder="Input your password" required>
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
    </div>
@endsection
