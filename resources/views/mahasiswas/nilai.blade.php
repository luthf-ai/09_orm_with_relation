@extends('mahasiswas.layout')

@section('content')
    <div class="row justify-content-center align-items-center m-5">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>JURUSAN TEKNOLOGI INFORMASI POLINEMA</h2>
            </div>
        </div>

        {{-- add mahasiswa nama nim and kelas --}}
        <div class="text-left col-lg-12 font-weight-bold ml-5">
            <p>Nama : {{ $mahasiswas->nama }}</p>
            <p>Nim : {{ $mahasiswas->nim }}</p>
            <p>Kelas : {{ $mahasiswas->kelas->nama_kelas }}</p>
        </div>

        <table class="table table-bordered mt-5 text-center table-hover table-striped">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mahasiswas->matkul as $mk)
            <tr>
                <td>{{ $mk->nama_matkul }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>{{ $mk->pivot->nilai }}</td>
            </tr>
            @endforeach
        </table>
    </div>