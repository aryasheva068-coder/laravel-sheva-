<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            (object) ['id' => 1,  'image' => 'project1.jpg',  'title' => 'Sistem Informasi Akademik'],
            (object) ['id' => 2,  'image' => 'project2.jpg',  'title' => 'E-commerce SEO Optimization'],
            (object) ['id' => 3,  'image' => 'project3.jpg',  'title' => 'Redesign Cover & Branding'],
            (object) ['id' => 4,  'image' => 'project4.jpg',  'title' => 'Aplikasi E-Perpustakaan'],
            (object) ['id' => 5,  'image' => 'project5.jpg',  'title' => 'Dashboard Landing Page UMKM'],
            (object) ['id' => 6,  'image' => 'project6.jpg',  'title' => 'Sistem Kasir (POS) Toko'],
            (object) ['id' => 7,  'image' => 'project7.jpg',  'title' => 'Aplikasi Absensi Online'],
            (object) ['id' => 8,  'image' => 'project8.jpg',  'title' => 'Company Profile Toko Kopi'],
            (object) ['id' => 9,  'image' => 'project9.jpg',  'title' => 'Aplikasi Pengaduan Masyarakat'],
            (object) ['id' => 10, 'image' => 'project10.jpg', 'title' => 'Desain Poster Event Kampus'],
        ];

        $projects = collect($projects);

        $perPage     = 5;
        $currentPage = request()->get('page', 1);

        $projects = new LengthAwarePaginator(
            $projects->forPage($currentPage, $perPage),
            $projects->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        return view('project', compact('projects'));
    }

    public function detail($id)
    {
        $project = (object) [
            'id'          => $id,
            'title'       => 'Sistem Informasi Akademik',
            'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai perkuliahan.',
            'image'       => 'project1.jpg',
            'status'      => 'Web App',
            'teknologi'   => 'Laravel, MySQL, Bootstrap',
            'tahun'       => '2024',
        ];

        return view('project-detail', compact('project'));
    }
}