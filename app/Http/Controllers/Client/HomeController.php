<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    return view('pages.client.home', [
      'travel_packages' => TravelPackage::all()
    ]);
  }
}
