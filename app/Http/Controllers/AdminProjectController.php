<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'teknologi' => 'required',
            'status' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('upload'), $nama_file);
            $data['image'] = $nama_file;
        }

        Project::create($data);

        return redirect()->route('admin.projects')->with('success', 'Project berhasil ditambahkan!');
    }

    // --- FUNGSI BARU DI BAWAH INI ---

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'teknologi' => 'required',
            'status' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        $project = Project::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('upload'), $nama_file);
            $data['image'] = $nama_file;
        }

        $project->update($data);

        return redirect()->route('admin.projects')->with('success', 'Project berhasil diupdate!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('admin.projects')->with('success', 'Project berhasil dihapus!');
    }
}