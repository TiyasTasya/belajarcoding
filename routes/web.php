<?php

use App\Http\Controllers\Belajarcoding;
use App\Http\Controllers\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/testing', action: function (): string{
    return "Ngabuburit Belajar Laravel";

});

route::get('/mahasiswa', [Belajarcoding::class, 'index']);

Route::get('/', function () {
    return view('home', ['name' => 'Tiyas Tasya']);
});

Route::get('/home', [Belajarcoding::class, 'home']);

Route::get('/mahasiswa/create', [Mahasiswa::class, 'create']);
Route::post('/mahasiswa/store', [Mahasiswa::class, 'store']);
