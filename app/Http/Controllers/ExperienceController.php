<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Experience::create($request->all());
        return redirect()->route('experiences.index')->with('success', 'Experience berhasil ditambahkan.');
    }

    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'date' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $experience->update($request->all());
        return redirect()->route('experiences.index')->with('success', 'Experience berhasil diperbarui.');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experiences.index')->with('success', 'Experience berhasil dihapus.');
    }
}
