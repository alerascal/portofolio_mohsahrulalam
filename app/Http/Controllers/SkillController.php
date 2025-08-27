<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all()->groupBy('category');
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'icon' => 'nullable',
            'level' => 'required|integer|min:0|max:100'
        ]);

        Skill::create($request->all());
        return redirect()->route('skills.index')->with('success', 'Skill berhasil ditambahkan!');
    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'icon' => 'nullable',
            'level' => 'required|integer|min:0|max:100'
        ]);

        $skill->update($request->all());
        return redirect()->route('skills.index')->with('success', 'Skill berhasil diupdate!');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Skill berhasil dihapus!');
    }
}
