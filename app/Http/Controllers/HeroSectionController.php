<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    // Menampilkan semua hero
    public function index()
    {
        $heroes = HeroSection::all();
        return view('hero.index', compact('heroes'));
    }

    // Form create
    public function create()
    {
        $hero = HeroSection::first();
        if ($hero) {
            return redirect()->route('hero.edit', $hero->id)
                ->with('info', 'Hero section sudah ada, silakan edit.');
        }

        return view('hero.create');
    }

    // Store data baru
    public function store(Request $request)
    {
        if (HeroSection::exists()) {
            return redirect()->route('hero.index')
                ->with('error', 'Hero section sudah ada, tidak bisa menambah baru.');
        }

        $request->validate([
            'badge' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'desc' => 'required|string',
            'stats' => 'required|array',
            'stats.*.label' => 'required|string',
            'stats.*.value' => 'required|string',
        ]);

        HeroSection::create([
            'badge' => $request->badge,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'desc' => $request->desc,
            'stats' => $request->stats, // langsung array, auto jadi JSON karena cast
        ]);

        return redirect()->route('hero.index')
            ->with('success', 'Hero section created successfully');
    }

    // Form edit
    public function edit(HeroSection $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    // Update data
    public function update(Request $request, HeroSection $hero)
    {
        $request->validate([
            'badge' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'desc' => 'required|string',
            'stats' => 'required|array',
            'stats.*.label' => 'required|string',
            'stats.*.value' => 'required|string',
        ]);

        $hero->update([
            'badge' => $request->badge,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'desc' => $request->desc,
            'stats' => $request->stats, // langsung array
        ]);

        return redirect()->route('hero.index')
            ->with('success', 'Hero section updated successfully');
    }

    // Hapus hero
    public function destroy(HeroSection $hero)
    {
        $hero->delete();
        return redirect()->route('hero.index')
            ->with('success', 'Hero section deleted successfully');
    }

    // Show detail
    public function show(HeroSection $hero)
    {
        return view('hero.show', compact('hero'));
    }
}
