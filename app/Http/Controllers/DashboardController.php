<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class create_DashboardController extends Controller
{
    public function showDashboard()
    {
        $todaySales = Sale::whereDate('sold_at', Carbon::today())->sum('amount');
        $yesterdaySales = Sale::whereDate('sold_at', Carbon::yesterday())->sum('amount');
        $thisMonthSales = Sale::whereMonth('sold_at', Carbon::now()->month)->sum('amount');
        $lastMonthSales = Sale::whereMonth('sold_at', Carbon::now()->subMonth())->sum('amount');

        return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }
}