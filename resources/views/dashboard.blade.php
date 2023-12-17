@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <div>
        <h3>Sales Figures</h3>
        <div>
            <strong>Today:</strong> ${{ $todaySales }}
        </div>
        <div>
            <strong>Yesterday:</strong> ${{ $yesterdaySales }}
        </div>
        <div>
            <strong>This Month:</strong> ${{ $thisMonthSales }}
        </div>
        <div>
            <strong>Last Month:</strong> ${{ $lastMonthSales }}
        </div>
    </div>
@endsection
