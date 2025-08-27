<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'category'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'client'      => 'nullable|string|max:255',
            'status'      => 'required|in:active,completed,pending,on-hold',
            'priority'    => 'required|in:low,medium,high',
            'deadline'    => 'nullable|date',
            'progress'    => 'required|integer|min:0|max:100',
            'cover_image' => 'nullable|image|max:2048',
            'demo_link'   => 'nullable|url',
            'source_link' => 'nullable|url',
            'technologies'=> 'nullable|string',
            'images.*'    => 'nullable|image|max:2048',
        ]);

        $data = $request->except('images');

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('projects', 'public');
        }

        $project = Project::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('project_images', 'public');
                $project->images()->create(['image' => $path]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'category'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'client'      => 'nullable|string|max:255',
            'status'      => 'required|in:active,completed,pending,on-hold',
            'priority'    => 'required|in:low,medium,high',
            'deadline'    => 'nullable|date',
            'progress'    => 'required|integer|min:0|max:100',
            'cover_image' => 'nullable|image|max:2048',
            'demo_link'   => 'nullable|url',
            'source_link' => 'nullable|url',
            'technologies'=> 'nullable|string',
            'images.*'    => 'nullable|image|max:2048',
        ]);

        $project = Project::findOrFail($id);
        $data = $request->except('images');

        // Update cover
        if ($request->hasFile('cover_image')) {
            if ($project->cover_image && Storage::disk('public')->exists($project->cover_image)) {
                Storage::disk('public')->delete($project->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('projects', 'public');
        }

        $project->update($data);

        // Tambah gallery baru (tidak hapus yang lama)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('project_images', 'public');
                $project->images()->create(['image' => $path]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->cover_image && Storage::disk('public')->exists($project->cover_image)) {
            Storage::disk('public')->delete($project->cover_image);
        }

        foreach ($project->images as $img) {
            if (Storage::disk('public')->exists($img->image)) {
                Storage::disk('public')->delete($img->image);
            }
            $img->delete();
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function deleteImage(Project $project, $imageId)
    {
        $image = $project->images()->where('id', $imageId)->firstOrFail();

        if (Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }

        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
