<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                "nama_matkul" => "Pemrograman Web",
                "sks" => "3",
                "jam" => "3",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Pemrograman Mobile",
                "sks" => "3",
                "jam" => "3",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Pemrograman Berorientasi Objek",
                "sks" => "3",
                "jam" => "3",
                "semester" => "2",
            ],
            [
                "nama_matkul" => "Pemrograman Web Lanjut",
                "sks" => "3",
                "jam" => "3",
                "semester" => "2",
            ],

        ];
        DB::table('matakuliah')->insert($matkul);
    }
}
