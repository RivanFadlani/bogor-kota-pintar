<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function getCounters()
    {
        // Hitung jumlah total pengunjung
        $totalVisitors = Visitor::count();

        // Hitung jumlah pengunjung untuk hari ini
        $todayVisitors = Visitor::whereDate('visited_date', now()->toDateString())->count();

        // Kirim data ke view
        return view('your_view', [
            'totalVisitors' => $totalVisitors,
            'todayVisitors' => $todayVisitors,
        ]);
    }
}
