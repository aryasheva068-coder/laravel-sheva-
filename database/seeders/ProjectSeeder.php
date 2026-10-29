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
        $projects = [
            [
                'title' => 'Sistem ERP',
                'description' => 'Sistem ERP untuk perusahaan manufaktur yang mengintegrasikan berbagai fungsi bisnis seperti keuangan, produksi, dan manajemen persediaan.',
                'teknologi' => 'PHP, Laravel',
                'image' => 'project1.jpg',
                'status'=> 'active'
            ],
            [
                'title' => 'Sistem HRIS',
                'description' => 'Sistem HRIS untuk mengelola data karyawan dan proses sumber daya manusia.',
                'teknologi' => 'JavaScript, React',
                'image' => 'project2.jpg',
                'status'=> 'active'
            ],
            [
                'title' => 'Sistem SCM',
                'description' => 'Sistem SCM untuk mengelola rantai pasokan dan logistik perusahaan.',
                'teknologi' => 'Python, Django',
                'image' => 'project3.jpg',
                'status'=> 'active'
            ],
            [
                'title' => 'Sistem WMS',
                'description' => 'Sistem Warehouse Management System untuk mengelola inventaris dan operasional gudang.',
                'teknologi' => 'PHP, Laravel',
                'image' => 'project4.jpg',
                'status'=> 'active'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}