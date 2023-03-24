<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        'no_handphone',
        'email',
        'tanggal_lahir',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    use HasFactory;
}
