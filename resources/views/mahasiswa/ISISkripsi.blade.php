@extends('layouts.main')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Isi Skripsi Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="/dashboardmahasiswa/IsiSkripsiMahasiswa">
                @csrf
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <label for="">Semester Aktif</label>
                <select class="custom-select @error('semester')
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
                <br>
                <label for="tglsidang">Tanggal Sidang</label>
                <div class="form-group">
                    <input type="date"
                        class="form-control  @error('tglsidang')
                        is-invalid    
                        @enderror"
                        id="tglsidang" name="tglsidang" placeholder="Tanggal sidang" required
                        value="{{ old('tglsidang') }}">
                    @error('tglsidang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="dosenpembimbing">Dosen Pembimbing</label>
                <div class="form-group">
                    <input type="text"
                        class="form-control  @error('dosenpembimbing')
                        is-invalid    
                        @enderror"
                        id="dosenpembimbing" name="dosenpembimbing" placeholder="Dosen Pembimbing" required
                        value="{{ old('dosenpembimbing') }}">
                    @error('dosenpembimbing')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="scansidang">Upload Berita Acara Sidang</label>
                <div class="form-group">
                    <input type="file"
                        class="form-control  @error('scansidang')
                    is-invalid    
                    @enderror"
                        id="scansidang" name="scansidang" placeholder="Jumlah SKS" required value="{{ old('scansidang') }}">
                    @error('scansidang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Login
                </button>
        </div>
    </div>
    </form>
    </div>
    </div>
    <br><br><br><br>
    </div>
    <!-- /.container-fluid -->
@endsection
