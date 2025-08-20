<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan dashboard dengan data proyek
    public function index()
    {
        $projects = Project::all(); // Ambil data proyek dari database
        return view('dashboard', compact('projects'));
    }

    public function updateProject(Request $request, $id)
    {
        $project = Project::find($id); // Mencari proyek berdasarkan ID
        if ($project) {
            $project->name = $request->input('name');
            $project->client = $request->input('client');
            $project->status = $request->input('status');
            $project->priority = $request->input('priority');
            $project->deadline = $request->input('deadline');
            $project->progress = $request->input('progress');
            $project->save(); // Menyimpan data yang telah diubah

            return redirect()->route('dashboard')->with('success', 'Project updated successfully');
        }

        return redirect()->route('dashboard')->with('error', 'Project not found');
    }
}
