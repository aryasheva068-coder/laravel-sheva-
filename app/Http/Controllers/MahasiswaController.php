<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim'    => '251011700400',
            'nama'   => 'Arya Sheva',
            'prodi'  => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email'  => 'aryasheva068@mail.com',
            'status' => 'aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}