<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function transactions()
    {
        $transactions = Transaction::with('user', 'product')->latest()->paginate(10);
        return view('admin.transactions', compact('transactions'));
    }
}
