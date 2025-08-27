<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $links = SocialLink::all();
        return view('social_links.index', compact('links'));
    }

    public function create()
    {
        return view('social_links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'url'  => 'required|url'
        ]);

        SocialLink::create($request->all());
        return redirect()->route('social_links.index')->with('success', 'Link berhasil ditambahkan');
    }

    public function edit(SocialLink $social_link)
    {
        return view('social_links.edit', compact('social_link'));
    }

    public function update(Request $request, SocialLink $social_link)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'url'  => 'required|url'
        ]);

        $social_link->update($request->all());
        return redirect()->route('social_links.index')->with('success', 'Link berhasil diperbarui');
    }

    public function destroy(SocialLink $social_link)
    {
        $social_link->delete();
        return redirect()->route('social_links.index')->with('success', 'Link berhasil dihapus');
    }
}
