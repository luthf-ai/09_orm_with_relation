<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matkul extends Model
{
    use HasFactory;
    protected $table = 'mhs_matkul';
    protected $fillable = [
        'mahasiswa_id',
        'matkul_id',
        'nilai',
    ];
}
