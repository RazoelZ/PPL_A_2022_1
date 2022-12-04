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
            <h6 class="m-0 font-weight-bold text-primary">Update Data Mahasiswa</h6>
        </div>
        @foreach ($data as $item)
            <form class="user p-5" action="/dashboardadmin/edituser/{{ $item['id'] }}" method="POST">
                @method('put')
                @csrf
                <label for="name">Nama</label>
                <div class="form-group">
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                        id="name" placeholder="Name" required value="{{ old('name', $item->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="email">E-Mail</label>
                <div class="form-group">
                    <input type="email" name="email" class="form-control    @error('email') is-invalid @enderror"
                        id="email" placeholder="Email Address" required value="{{ old('email', $item->email) }}"
                        disabled>
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
                        id="nim" name="nim" placeholder="NIM" required value="{{ old('nim', $item->nim) }}"
                        disabled>
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
                        id="jurusan" name="jurusan" placeholder="Jurusan" required
                        value="{{ old('jurusan', $item->jurusan) }}">
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
                        id="angkatan" name="angkatan" placeholder="Angkatan" required
                        value="{{ old('angkatan', $item->angkatan) }}">
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
                    <label for="level">Level Aktif</label>
                    <div class="form-group">
                        <select
                            class="form-control @error('level')
                is-invalid    
                @enderror"
                            name="level" id="level" required>
                            <option selected disabled>Level</option>
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
                        <label for="status">Status</label>
                        <div class="form-group">
                            <select
                                class="form-control @error('status')
                    is-invalid    
                    @enderror"
                                name="status" id="status" required>
                                <option selected disabled>Status Keaktifan</option>
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
        @endforeach
        <button class="btn btn-primary btn-user btn-block mt-4" type="submit">
            Update Data
        </button>
        </form>
    </div>
    <div class="pt-5">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    </div>
    </div>
    </div>
@endsection
