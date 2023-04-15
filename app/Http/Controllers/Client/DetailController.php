<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(string $slug) {
      $travel_package = TravelPackage::where('slug', $slug)->get()->first();
      $galleries = $travel_package->galleries->splice(1)->all();

      return view('pages.client.detail', [
        'travel_package' => $travel_package,
        'galleries' => $galleries
      ]);
    }
}
