<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Belajarcoding extends Controller
{
    public function home()
    {
        return view('home', ['name' => 'Tiyas Tasya']);
    }

    public function store(Request $request)
    {
        $nim = $request->input('nim');
        $nama_lengkap = $request->input('nama_lengkap');
        $username = $request->input('username');
        $password = $request->input('password');
    }
}
