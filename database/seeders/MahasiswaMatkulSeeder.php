<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MahasiswaMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seed each mahasiswa with all matkul and random nilai factory
        $mahasiswas = \App\Models\Mahasiswa::all();
        $matkuls = \App\Models\Matakuliah::all();
        foreach ($mahasiswas as $mahasiswa) {
            foreach ($matkuls as $matkul) {
                $mahasiswa->matkul()->attach($matkul->id, [
                    // mahasiswa_id and matkul_id are auto filled
                    // rand A to F
                    'nilai' => chr(rand(65, 70)),
                ]);
            }
        }
    }
}
