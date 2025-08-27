<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->translatedFormat('l, d F Y');
        return view('calendar.index', compact('today'));
    }
}