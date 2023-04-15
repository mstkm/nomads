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
          <h1>{{ $travel_package->title }}</h1>
          <p>{{ $travel_package->location }}</p>
          <div class="gallery">
            <div class="xzoom-container">
              <img src="{{ url('storage/'.$galleries[0]->image) }}" class="xzoom" id="xzoom-default" xoriginal="{{ url('storage/'.$galleries[0]->image) }}">
            </div>
            <div class="xzoom-thumbs">
              @foreach ($galleries as $gallery)
                <a href="{{ url('storage/'.$gallery->image) }}">
                  <img src="{{ url('storage/'.$gallery->image) }}" class="xzoom-gallery" width="128" xpreview="{{ url('storage/'.$gallery->image) }}">
                </a>
              @endforeach
            </div>
          </div>
          <h2>Tentang Wisata</h2>
          <p>{{ $travel_package->description }}</p>
          <div class="features row mt-4">
            <div class="col-md-4 d-flex align-items-center">
              <div class="d-flex justify-content-center align-items-center pe-3">
                <img src="{{ url('./frontend/images/ticket.png') }}" alt="event" style="width: 45px;">
              </div>
              <div>
                <h4>Featured Event</h4>
                <p>{{ $travel_package->featured_event }}</p>
              </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
              <div class="d-flex justify-content-center align-items-center pe-3">
                <img src="{{ url('./frontend/images/linguistics.png') }}" alt="event" style="width: 45px;">
              </div>
              <div>
                <h4>Language</h4>
                <p>{{ $travel_package->language }}</p>
              </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
              <div class="d-flex justify-content-center align-items-center pe-3">
                <img src="{{ url('./frontend/images/dish.png') }}" alt="event" style="width: 45px;">
              </div>
              <div>
                <h4>Foods</h4>
                <p>{{ $travel_package->foods }}</p>
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
                <p class="mb-2">{{ date_format(date_create($travel_package->departure_date), 'F j, Y') }}</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Duration</p>
                <p  class="mb-2">{{ $travel_package->duration }}</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Type</p>
                <p class="mb-2">{{ $travel_package->type }}</p>
              </div>
              <div class="d-flex justify-content-between">
                <p class="mb-2">Price</p>
                <p class="mb-2">${{ $travel_package->price }},00 / person</p>
              </div>
            </div>
          </div>
          @auth
            <form action="{{ route('checkout-proccess', $travel_package->id) }}" method="post">
              @csrf
              <button class="btn btn-join d-block w-100" type="submit">Join Now</button>
            </form>
          @endauth
          @guest
            <a href="{{ route('login') }}" class="btn btn-join">Login or Register to Join</a>
          @endguest
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
