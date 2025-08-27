<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Ambil data About pertama
         $abouts = About::all();

        return view('about.index', compact('abouts'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/about', 'public');
        }

        About::updateOrCreate(
            ['id' => 1], // Asumsi hanya satu entri
            $data
        );

        return redirect()->route('about.index')->with('success', 'Data About berhasil disimpan.');
    }

    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/about', 'public');
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'Data About berhasil diperbarui.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'Data About berhasil dihapus.');
    }
}
