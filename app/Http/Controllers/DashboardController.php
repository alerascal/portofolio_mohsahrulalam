<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;
use DB;


class DashboardController extends Controller
{
    public function index()
{
    $projects = Project::all();

    // Statistik visitor
    $totalVisitors   = Visitor::count();
    $todayVisitors   = Visitor::whereDate('visited_at', Carbon::today())->count();
    $monthlyVisitors = Visitor::whereMonth('visited_at', Carbon::now()->month)
                              ->whereYear('visited_at', Carbon::now()->year)
                              ->count();
    $yearlyVisitors  = Visitor::whereYear('visited_at', Carbon::now()->year)->count();
    // Data grafik bulanan tahun ini
$monthlyChart = Visitor::select(DB::raw('MONTH(visited_at) as month'), DB::raw('count(*) as total'))
                ->whereYear('visited_at', Carbon::now()->year)
                ->groupBy('month')
                ->pluck('total','month');

// Pastikan semua bulan ada datanya (default 0 jika tidak ada visitor)
$months = range(1,12);
$monthlyChart = collect($months)->mapWithKeys(function($m) use ($monthlyChart){
    return [$m => $monthlyChart[$m] ?? 0];
});


    // Data grafik harian bulan ini
    $dailyChart = Visitor::select(DB::raw('DATE(visited_at) as date'), DB::raw('count(*) as total'))
                ->whereMonth('visited_at', Carbon::now()->month)
                ->groupBy('date')
                ->pluck('total','date');

    return view('dashboard', compact(
        'projects',
        'totalVisitors',
        'todayVisitors',
        'monthlyVisitors',
        'yearlyVisitors',
        'dailyChart',
         'monthlyChart'
    ));
}
}
