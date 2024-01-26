<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mhsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert([
            'nim'=>'123',
            'nama'=> 'nurul',
            'kelas'=>'r003',
            'des'=>'mahasiswa sc24'
        ]);
        DB::table('mhs')->insert([
            'nim'=>'124',
            'nama'=> 'Reza',
            'kelas'=>'r003',
            'des'=>'mahasiswa sc24'
        ]);
        DB::table('mhs')->insert([
            'nim'=>'125',
            'nama'=> 'mukhtada',
            'kelas'=>'r003',
            'des'=>'mahasiswa sc24'
        ]);
    }
}
