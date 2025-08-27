<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Hanya catat jika mengunjungi route welcome
        if ($request->routeIs('welcome')) {
            $ip = $request->ip();
            $userAgent = $request->userAgent();
            $today = Carbon::today();

            // Cek apakah IP ini sudah tercatat hari ini
            $exists = Visitor::where('ip_address', $ip)
                ->whereDate('visited_at', $today)
                ->exists();

            if (!$exists) {
                Visitor::create([
                    'ip_address' => $ip,
                    'user_agent' => $userAgent,
                    'visited_at' => $today,
                ]);
            }
        }

        return $next($request);
    }
}
