<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Zeri Zaidan',
            'email' => 'zerizaidan@gmail.com',
            'password' => bcrypt('123123'),
            'nim' => '24060120150214',
            'jurusan' => 'Informatika S1',
            'angkatan' => '2020',
            'level' => 'user',
            'dosenwali' => 'Prabowo Nur Khalid',
            'status' => 'Aktif'
        ]);

        User::create([
            'name' => 'Awan Widiatma',
            'email' => 'awanwidiatma@gmail.com',
            'password' => bcrypt('123123'),
            'nim' => '24010122150214',
            'jurusan' => 'Informatika S1',
            'angkatan' => '2020',
            'level' => 'user',
            'dosenwali' => 'Prabowo Nur Khalid',
            'status' => 'Aktif'
        ]);

        User::create([
            'name' => 'FSM UNDIP',
            'email' => 'fsmundip@gmail.com',
            'password' => bcrypt('123123'),
            'nim' => '247474754',
            'jurusan' => 'Sains Dan Matematika',
            'angkatan' => '1989',
            'level' => 'department',
            'status' => 'Aktif'
        ]);

        User::create([
            'name' => 'Prabowo Nur Khalid',
            'email' => 'prabowo@gmail.com',
            'password' => bcrypt('123123'),
            'nim' => '19560701',
            'jurusan' => 'Informatika S1',
            'angkatan' => '2004',
            'level' => 'dosen',
            'status' => 'Aktif'
        ]);

        User::create([
            'name' => 'Migak Erlangga',
            'email' => 'migak@gmail.com',
            'password' => bcrypt('123123'),
            'nim' => '11254682',
            'jurusan' => 'Informatika S1',
            'angkatan' => '1995',
            'level' => 'admin',
            'status' => 'Operator'
        ]);
    }
}
