<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id) {
      $transaction = Transaction::findOrFail($id);

      return view('pages.client.checkout', [
        'transaction' => $transaction
      ]);
    }

    public function proccess(Request $request, $id) {
      $travel_package = TravelPackage::findOrFail($id);

      $transaction = Transaction::create([
        'travel_package_id' => $id,
        'user_id' => Auth::user()->id,
        'additional_visa' => 0,
        'transaction_total' => $travel_package->price,
        'transaction_status' => 'IN_CART'
      ]);

      TransactionDetail::create([
        'transaction_id' => $transaction->id,
        'name' => Auth::user()->name,
        'nationality' => 'ID',
        'is_visa' => false,
        'doe_passport' => Carbon::now()->addYears(5)
      ]);

      return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id) {
      $request->validate([
        'name' => 'required',
        'is_visa' => 'required',
        'doe_passport' => 'required',
      ]);

      $data = $request->all();
      $data['transaction_id'] = $id;

      TransactionDetail::create($data);

      $transaction = Transaction::findOrFail($id);

      if ($request->is_visa) {
        $transaction->transaction_total += 190;
        $transaction->additional_visa += 190;
      }

      $transaction->transaction_total += $transaction->travel_package->price;

      $transaction->save();

      return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id) {
      $transaction_detail = TransactionDetail::findOrFail($detail_id);

      $transaction = Transaction::findOrFail($transaction_detail->transaction_id);

      if ($transaction_detail->is_visa) {
        $transaction->transaction_total -= 190;
        $transaction->additional_visa -= 190;
      }

      $transaction->transaction_total -= $transaction->travel_package->price;

      $transaction->save();

      $transaction_detail->delete();

      return redirect()->route('checkout', $transaction_detail->transaction_id);
    }

    public function success(Request $request, $id) {
      $transaction = Transaction::findOrFail($id);
      $transaction->transaction_status = 'PENDING';

      $transaction->save();

      return view('pages.client.success');
    }
}
