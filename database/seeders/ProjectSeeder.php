<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'desription' => 'aplikasi berbasis web untuk pengelolaan data ',
                'teknologi' => 'Laravel & Boosstrap',
                'image' => 'project1.jpg',
                'status'=> 'selesai'
            ],
            [
                'title' => 'E-commerce SEO Optimization ',
                'desription' => 'aplikasi optimalisasi struktur head8ng dan indexing halaman web toko online  ',
                'teknologi' => 'PHP & Google Seare Console',
                'image' => 'project2.jpg',
                'status'=> 'in progress'
            ],
            [
                'title' => 'Redesind Cover & branding',
                'desription' => 'perancangan element grafis persinal branding dan desaint sampul buku rekayasa web',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status'=> 'selesai'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
