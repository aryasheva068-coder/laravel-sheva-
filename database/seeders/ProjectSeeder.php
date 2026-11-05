<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'System ERP',
                'description' => 'Sistem ERP untuk perusahaan manufaktur yang mengintegrasikan berbagai fungsi bisnis.',
                'teknologi' => 'PHP, Laravel',
                'image' => 'erp.jpg', // Sesuaikan dengan nama file asli
                'status'=> 'active'
            ],
            [
                'title' => 'System HRIS',
                'description' => 'Sistem HRIS untuk mengelola data karyawan dan proses sumber daya manusia.',
                'teknologi' => 'JavaScript, React',
                'image' => 'hris.jpg', // Sesuaikan dengan nama file asli
                'status'=> 'active'
            ],
            [
                'title' => 'System SCM',
                'description' => 'Sistem SCM untuk mengelola rantai pasokan dan logistik perusahaan.',
                'teknologi' => 'Python, Django',
                'image' => 'scm.jpg', // Sesuaikan dengan nama file asli
                'status'=> 'active'
            ],
            [
                'title' => 'tets project',
                'description' => 'testing project sheva',
                'teknologi' => 'laravel',
                'image' => 'saya.jpg', // Menggunakan file saya.png yang ada di folder upload
                'status'=> 'active'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}