<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700400',
            'nama'=> 'Arya Sheva',
            'jurusan' => 'SI',
            'kampus'=> 'unpam viktor',
            'email' => 'aryasheva068@gmail.com',
            'status'=> 'aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}