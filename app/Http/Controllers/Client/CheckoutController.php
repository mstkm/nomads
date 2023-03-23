<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
      return view('pages.client.checkout');
    }

    public function success() {
      return view('pages.client.success');
    }
}
