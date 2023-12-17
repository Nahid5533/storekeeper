<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class TransactionController extends Controller
{
    public function showTransactionHistory()
    {
        $transactions = Sale::orderBy('sold_at', 'desc')->paginate(10);
        return view('transactions', compact('transactions'));
    }
}