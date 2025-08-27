<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SocialLinkController;





Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Welcome page
Route::get('/', [FrontendController::class, 'welcome'])->name('welcome');
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'ar', 'ja', 'ko'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
// Dashboard (protected by auth middleware)
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');  // Menampilkan daftar proyek
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');  // Form untuk membuat proyek baru
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');  // Menyimpan proyek baru
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');  // Menampilkan detail proyek
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');  // Form untuk mengedit proyek
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');  // Menyimpan perubahan proyek
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');  // Menghapus proyek
Route::delete('/projects/{project}/images/{image}', [ProjectController::class, 'deleteImage'])
    ->name('projects.images.destroy');
// Rute untuk melihat semua hero
Route::get('/hero', [HeroSectionController::class, 'index'])->name('hero.index');

// Rute untuk membuat hero baru
Route::get('/hero/create', [HeroSectionController::class, 'create'])->name('hero.create');

// Rute untuk menyimpan hero baru
Route::post('/hero', [HeroSectionController::class, 'store'])->name('hero.store');

// Rute untuk melihat detail hero
Route::get('/hero/{hero}', [HeroSectionController::class, 'show'])->name('hero.show');

// Rute untuk mengedit hero
Route::get('/hero/{hero}/edit', [HeroSectionController::class, 'edit'])->name('hero.edit');

// Rute untuk memperbarui hero
Route::put('/hero/{hero}', [HeroSectionController::class, 'update'])->name('hero.update');

// Rute untuk menghapus hero
Route::delete('/hero/{hero}', [HeroSectionController::class, 'destroy'])->name('hero.destroy');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/about', [AboutController::class, 'store'])->name('about.store');
Route::get('/about/{about}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/about/{about}', [AboutController::class, 'update'])->name('about.update');
Route::delete('/about/{about}', [AboutController::class, 'destroy'])->name('about.destroy');
Route::resource('skills', SkillController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('contacts', \App\Http\Controllers\ContactController::class);
 Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings/update', [App\Http\Controllers\SettingsController::class, 'update'])->name('settings.update');
    Route::resource('social_links', SocialLinkController::class);

