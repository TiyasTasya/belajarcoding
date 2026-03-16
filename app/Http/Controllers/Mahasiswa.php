<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Controller
{
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        $nim = $request->input('nim');
        $nama_lengkap = $request->input('nama_lengkap');
        $kelas = $request->input('kelas');
        $alamat = $request->input('alamat');

        DB::table('mahasiswa')->insert([
            'nim' => $nim,
            'nama_lengkap' => $nama_lengkap,
            'kelas' => $kelas,
            'alamat' => $alamat,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/mahasiswa/create')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }
}
