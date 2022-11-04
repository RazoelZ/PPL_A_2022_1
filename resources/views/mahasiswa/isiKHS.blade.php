@extends('layouts.main')

@section('container')
    <!-- Page Heading -->
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Isi KHS Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form class="user" method="POST" action="/dashboardmahasiswa/IsiKHSMahasiswa">
                @csrf
                <div class="form-group">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <label for="">Semester Aktif</label>
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
                        <br>
                        <label for="skssemester">SKS Semester</label>
                        <div class="form-group">
                            <input type="text"
                                class="form-control  @error('skssemester')
                        is-invalid    
                        @enderror"
                                id="skssemester" name="skssemester" placeholder="SKS Semester" required
                                value="{{ old('skssemester') }}">
                            @error('skssemester')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label for="skskumulatif">SKS Kumulatif</label>
                        <div class="form-group">
                            <input type="text"
                                class="form-control  @error('skskumulatif')
                        is-invalid    
                        @enderror"
                                id="skskumulatif" name="skskumulatif" placeholder="SKS Kumulatif" required
                                value="{{ old('skskumulatif') }}">
                            @error('skskumulatif')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="ipsemester">IP Semester</label>
                        <div class="form-group">
                            <input type="text"
                                class="form-control  @error('ipsemester')
                        is-invalid    
                        @enderror"
                                id="ipsemester" name="ipsemester" placeholder="IP Semester" required
                                value="{{ old('ipsemester') }}">
                            @error('ipsemester')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="ipkumulatif">IP Kumulatif</label>
                        <div class="form-group">
                            <input type="text"
                                class="form-control  @error('ipkumulatif')
                        is-invalid    
                        @enderror"
                                id="ipkumulatif" name="ipkumulatif" placeholder="IP Kumulatif" required
                                value="{{ old('ipkumulatif') }}">
                            @error('ipkumulatif')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="scankhs">Upload Scan KHS</label>
                        <div class="form-group">
                            <input type="file"
                                class="form-control  @error('scankhs')
                            is-invalid    
                            @enderror"
                                id="scankhs" name="scankhs" placeholder="Jumlah SKS" required
                                value="{{ old('scankhs') }}">
                            @error('scankhs')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </div>
            </form>
        </div>
    </div>
    <br>
    </div>
    <!-- /.container-fluid -->
@endsection
