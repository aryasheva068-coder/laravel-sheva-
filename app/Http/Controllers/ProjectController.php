<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Panggil Model Project

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil data dari database, urutkan dari yang terbaru, dan tampilkan 6 per halaman
        $projects = Project::latest()->paginate(6);
        
        return view('project', compact('projects'));
    }

    public function detail($id)
    {
        // Ambil 1 data dari database berdasarkan ID
        $project = Project::findOrFail($id);

        return view('project-detail', compact('project'));
    }
}