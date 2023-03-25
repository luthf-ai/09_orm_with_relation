<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Kelas;

class MahasiswaController extends Controller
{
    //crud
    public function index()
    {
        $mahasiswas = Mahasiswa::with('kelas')->get();
        // if has term
        if (request()->term) {
            // search all collumn in table mahasiswas with nama_kelas from table kelas
            $posts = Mahasiswa::with('kelas')->whereHas('kelas', function ($query) {
                $query->where('nama_kelas', 'LIKE', '%' . request()->term . '%');
            })->orWhere('nim', 'LIKE', '%' . request()->term . '%')
                ->orWhere('nama', 'LIKE', '%' . request()->term . '%')
                ->orWhere('jurusan', 'LIKE', '%' . request()->term . '%')
                ->orWhere('no_handphone', 'LIKE', '%' . request()->term . '%')
                ->orWhere('email', 'LIKE', '%' . request()->term . '%')
                ->orWhere('tanggal_lahir', 'LIKE', '%' . request()->term . '%')
                ->orderBy('nim', 'desc')->paginate(5);
        }else{
            $posts = Mahasiswa::orderBy('nim', 'desc')->paginate(5);
        }
        return view('mahasiswas.index', compact('mahasiswas', 'posts'));

    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswas.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        // eloquent kelas id
        $kelas = Kelas::find($request->kelas);
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas_id' => $kelas->id,
            'jurusan' => $request->jurusan,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        

        

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa created successfully.');
    }

    public function show($nim)
    {
        $mahasiswas = Mahasiswa::find($nim);
        return view('mahasiswas.detail', compact('mahasiswas'));
    }

    public function edit($nim)
    {
        $mahasiswas = Mahasiswa::find($nim);
        $kelas = Kelas::all();
        return view('mahasiswas.edit', compact('mahasiswas', 'kelas'));
    }

    public function update(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        $kelas = Kelas::find($request->kelas);
        Mahasiswa::find($nim)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas_id' => $kelas->id,
            'jurusan' => $request->jurusan,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy($nim)
    {
        Mahasiswa::find($nim)->delete();

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }

    public function nilai($nim) //mahasiswas.nilai route not found, add route in web.php
    {
        $mahasiswas = Mahasiswa::with('kelas')->with('matkul')->find($nim);

        return view('mahasiswas.nilai', compact('mahasiswas'));
    }

}
