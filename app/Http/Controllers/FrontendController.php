<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\About;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Contact; 
use App\Models\SocialLink; // ✅ tambahkan SocialLink
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome()
    {
        $hero = HeroSection::first();
        $abouts = About::first();
        $skills = Skill::all()->groupBy('category'); 
        $experiences = Experience::orderBy('date', 'asc')->get();
        $projects = Project::latest()->take(6)->get();

        // Ambil semua contact untuk ditampilkan di frontend
        $contacts = Contact::all();

        // Ambil nomor WA untuk form
        $phoneContact = $contacts->where('type', 'phone')->first();
        $phoneNumber = $phoneContact ? $phoneContact->value : '628000000000';

        // ✅ Ambil semua social links
        $socialLinks = SocialLink::all();

        return view('welcome', compact(
            'hero', 
            'abouts', 
            'skills', 
            'experiences', 
            'projects', 
            'contacts', 
            'phoneNumber',
            'socialLinks' // kirim ke frontend
        ));
    }
}
