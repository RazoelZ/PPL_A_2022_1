<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;

//import excel to database with if status == null status = Belum Disetujui and if status_pkl == null status_pkl = Belum and if status_skripsi == null status_skripsi = Belum
class ImportMahasiswa implements ToModel, WithHeadingRow, SkipsOnFailure, WithValidation
{
  use Importable, SkipsFailures;

  public function model(array $row)
  {
    User::create([
      'name' => $row['nama'],
      'email' => $row['email'],
      'nim' => $row['nim'],
      'jurusan' => $row['jurusan'],
      'angkatan' => $row['angkatan'],
      'level' => $row['level'],
      'status' => $row['status'],
      'dosenwali' => $row['dosenwali'],
      'password' => Hash::make('123123'),

    ]);
  }
  public function rules(): array
  {
    return [];
  }
}
