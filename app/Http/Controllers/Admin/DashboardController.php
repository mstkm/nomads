<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
      $travel_pakages = TravelPackage::all();
      $transactions = Transaction::all();
      $transactions_pending = Transaction::where('transaction_status', 'PENDING');
      $transactions_success = Transaction::where('transaction_status', 'SUCCESS');


      return view('pages.admin.dashboard', [
        'travel_packages' => $travel_pakages,
        'transactions' => $transactions,
        'transactions_pending' => $transactions_pending,
        'transactions_success' => $transactions_success,
      ]);
    }
}
