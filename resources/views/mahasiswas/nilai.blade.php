@extends('mahasiswas.layout')

@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>JURUSAN TEKNOLOGI INFORMASI POLINEMA</h2>
        </div>
    </div>

    {{-- add mahasiswa nama nim and kelas --}}
    <div class="text-left col-lg-12"
        style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px; font-size: 20px; font-weight: bold;">
        <p>Nama : {{ $mahasiswas->nama }}</p>
        <p>Nim : {{ $mahasiswas->nim }}</p>
        <p>Kelas : {{ $mahasiswas->kelas->nama_kelas }}</p>
    </div>

    <table class="table table-bordered mt-5 text-center table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        {{$i = 0}}}
        @foreach ($mahasiswas->matkul as $mk)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mk->nama_matkul }}</td>
            <td>{{ $mk->sks }}</td>
            <td>{{ $mk->semester }}</td>
            <td>{{ $mk->pivot->nilai }}</td>
        </tr>
        @endforeach
    </table>
