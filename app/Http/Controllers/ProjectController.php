<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Menampilkan daftar proyek
    public function index()
    {
        $projects = Project::all(); // Ambil semua data proyek
        return view('projects.index', compact('projects'));  // Kirim data proyek ke view 'projects.index'
    }

    // Menampilkan form untuk membuat proyek baru
    public function create()
    {
        return view('projects.create');  // Tampilkan form untuk membuat proyek baru
    }

    // Menyimpan proyek baru
    public function store(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'priority' => 'required|string|max:255',
            'deadline' => 'required|date',
            'progress' => 'required|integer|min:0|max:100',
        ]);

        // Membuat dan menyimpan proyek baru
        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Project created successfully');
    }

    // Menampilkan detail proyek
    public function show($id)
    {
        $project = Project::findOrFail($id);  // Mencari proyek berdasarkan ID
        return view('projects.show', compact('project'));  // Tampilkan detail proyek
    }

    // Menampilkan form untuk mengedit proyek
    public function edit($id)
    {
        $project = Project::findOrFail($id);  // Cari proyek berdasarkan ID
        return view('projects.edit', compact('project'));  // Tampilkan form edit proyek
    }

    // Menyimpan perubahan proyek
    public function update(Request $request, $id)
    {
        // Validasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'priority' => 'required|string|max:255',
            'deadline' => 'required|date',
            'progress' => 'required|integer|min:0|max:100',
        ]);

        // Mencari proyek berdasarkan ID dan mengupdate data
        $project = Project::findOrFail($id);
        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }

    // Menghapus proyek
    public function destroy($id)
    {
        $project = Project::findOrFail($id);  // Cari proyek berdasarkan ID
        $project->delete();  // Hapus proyek dari database

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }
}
