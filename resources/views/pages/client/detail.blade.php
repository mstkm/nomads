@extends('layouts.app')

@section('title', 'Nomads | Detail')

@push('addon-style')
  <link rel="stylesheet" href="{{ url('./frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content container pb-5">
    <div>
      <div class="row">
        <div class="col p-0">
          <nav class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Paket Travel</li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 pl-lg-0 mb-3">
        <div class="card card-details p-4">
          <h1>Nusa Penida</h1>
          <p>Indonesia</p>
          <div class="gallery">
            <div class="xzoom-container">
              <img src="./frontend/images/nusa1.jpg" class="xzoom" id="xzoom-default" xoriginal="./frontend/images/nusa1.jpg">
            </div>
            <div class="xzoom-thumbs">
              <a href="./frontend/images/nusa1.jpg">
                <img src="./frontend/images/nusa1.jpg" class="xzoom-gallery" width="128" xpreview="./frontend/images/nusa1.jpg">
              </a>
              <a href="./frontend/images/nusa2.jpg">
                <img src="./frontend/images/nusa2.jpg" class="xzoom-gallery" width="128" xpreview="./frontend/images/nusa2.jpg">
              </a>
              <a href="./frontend/images/nusa3.jpg">
                <img src="./frontend/images/nusa3.jpg" class="xzoom-gallery" width="128" xpreview="./frontend/images/nusa3.jpg">
              </a>
              <a href="./frontend/images/nusa4.jpg">
                <img src="./frontend/images/nusa4.jpg" class="xzoom-gallery" width="128" xpreview="./frontend/images/nusa4.jpg">
              </a>
            </div>
          </div>
          <h2>Tentang Wisata</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="features row mt-4">
            <div class="col-md-4 d-flex align-items-center">
              <div class="d-flex justify-content-center align-items-center pe-3">
                <img src="{{ url('./frontend/images/ticket.png') }}" alt="event" style="width: 45px;">
              </div>
              <div>
                <h4>Featured Event</h4>
                <p>Tari Kecak</p>
              </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
              <div class="d-flex justify-content-center align-items-center pe-3">
                <img src="{{ url('./frontend/images/linguistics.png') }}" alt="event" style="width: 45px;">
              </div>
              <div>
                <h4>Language</h4>
                <p>Bahasa Indonesia</p>
              </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
              <div class="d-flex justify-content-center align-items-center pe-3">
                <img src="{{ url('./frontend/images/dish.png') }}" alt="event" style="width: 45px;">
              </div>
              <div>
                <h4>Foods</h4>
                <p>Local foods</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-details card-right">
          <div class="p-4">
            <h5 class="fw-bold">Members are going</h5>
            <div class="d-flex py-4">
              <img src="{{ url('./frontend/images/user1.png') }}" alt="user1">
              <img src="{{ url('./frontend/images/user2.png') }}" alt="user2">
              <img src="{{ url('./frontend/images/user3.png') }}" alt="user3">
              <div class="members-plus">9+</div>
            </div>
            <div class="pt-3 border-top">
              <h5 class="fw-bold mb-3">Trip Informations</h5>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Date of Departure</p>
                <p class="mb-2">22 Aug, 2022</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Duration</p>
                <p  class="mb-2">4D 3N</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Type</p>
                <p class="mb-2">Open Trip</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Price</p>
                <p class="mb-2">$80 / person</p>
              </div>
            </div>
          </div>
          <a href="{{ route('checkout') }}" class="btn btn-join">Join Now</a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection


@push('addon-script')
  <script src="{{ url('/frontend/libraries/xzoom/xzoom.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 450,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });
  </script>
@endpush
