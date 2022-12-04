@extends('layouts.adminmain')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update User</h6>
        </div>
        @foreach ($user as $item)
            <form class="user px-5 pt-3" action="/dashboardadmin/viewuser/update/{id}" method="POST">
                @method('put')
                @csrf
                <label for="name">Nama<sup class="text-danger">*</sup></label>
                <div class="form-group">
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                        id="name" placeholder="Your name" required value="{{ $item->name }}">
                    @error('name')
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
                        id="nim" name="nim" placeholder="Masukkan NIM anda" required value="{{ $item->nim }}">
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
                        id="jurusan" name="jurusan" placeholder="Masukkan jurusan anda" required
                        value="{{ $item->jurusan }}">
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
                        value="{{ $item->angkatan }}">
                    @error('angkatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="dosenwali">Masukkan Dosen Wali Anda</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control 
                             @error('dosenwali')
                        is-invalid    
                        @enderror"
                        id="dosenwali" name="dosenwali" placeholder="Masukkan dosenwali (jika user mahasiswa)" required
                        value="{{ $item->dosenwali }}">
                    @error('dosenwali')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="level">level Aktif<sup class="text-danger">*</sup></label>
                <div class="form-group">
                    <select
                        class="form-control @error('level')
                is-invalid    
                @enderror mb-3"
                        name="level" id="level" value="{{ $item->level }}" required>
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
                            name="status" id="status" value="{{ $item->status }}" required>
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
                        <button class="btn btn-primary btn-user btn-block" type="submit">
                            Update Data </button>
            </form>
        @endforeach
    </div>
    </div>
    </div>
@endsection
