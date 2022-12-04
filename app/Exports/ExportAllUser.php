<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ExportAllUser implements FromCollection, WithHeadings
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {

    return  DB::table('users')
      ->select('name', 'email', 'nim', 'jurusan', 'angkatan', 'nomortlp', 'alamat', 'status', 'dosenwali')
      ->get();
  }

  public function headings(): array
  {
    return [
      'Nama',
      'Email',
      'NIM',
      'Jurusan',
      'Angkatan',
      'Alamat',
      'nomer Telepon',
      'status',
      'dosenwali'
    ];
  }
}
