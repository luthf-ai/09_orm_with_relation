<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                "nama_matkul" => "Bahasa Inggris",
                "sks" => "2",
                "jam" => "2",
                "semester" => "1",
            ],
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
                "nama_matkul" => "Pemrograman Desktop",
                "sks" => "3",
                "jam" => "3",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Basis Data",
                "sks" => "3",
                "jam" => "3",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Algoritma & Pemrograman",
                "sks" => "3",
                "jam" => "3",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Kalkulus",
                "sks" => "3",
                "jam" => "3",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Bahasa Indonesia",
                "sks" => "2",
                "jam" => "2",
                "semester" => "1",
            ],
            [
                "nama_matkul" => "Matematika Diskrit",
                "sks" => "3",
                "jam" => "3",
                "semester" => "2",
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
