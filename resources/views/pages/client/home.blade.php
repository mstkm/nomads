@extends('layouts.app')

@section('title', 'Nomads | Home')

@section('content')
  <!-- Header -->
  <header class="text-center">
    <div class="bg-modal"></div>
    <h1>Explore The Beautiful World <br>As Easy One Click</h1>
    <p class="mt-4">You will see beautiful <br>moment you never see before</p>
    <a href="#" class="btn btn-get-started mt-4 px-4">Get Started</a>
  </header>

  <!-- Main -->
  <main>
    <!-- Statistik -->
    <div class="container d-flex justify-content-center">
      <section class="section-stats d-flex" id="stats">
        <div class="flex-grow-1 stats-detail">
          <div>
            <h2>20K</h2>
            <p>Members</p>
          </div>
        </div>
        <div class="flex-grow-1 stats-detail">
          <div>
            <h2>12</h2>
            <p>Countries</p>
          </div>
        </div>
        <div class="flex-grow-1 stats-detail">
          <div>
            <h2>3K</h2>
            <p>Hotels</p>
          </div>
        </div>
        <div class="flex-grow-1 stats-detail">
          <div>
            <h2>72</h2>
            <p>Partners</p>
          </div>
        </div>
      </section>
    </div>

    <!-- Popular -->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="col text-center section-popular-heading">
          <h2>Wisata Popular</h2>
          <p>Something that you never try <br>before in this world</p>
        </div>
      </div>
    </section>
    <section class="section-popular-content pb-5" id="popular-content">
      <div class="container d-flex justify-content-around flex-wrap">
        <div class="section-popular-travel d-flex flex-column rounded mb-3" style="background-image: url('./frontend/images/popular1.jpg');">
          <div class="flex-grow-1 text-center py-4">
            <p class="m-0 fs-5">Indonesia</p>
            <p class="m-0 fs-5 fw-bold">DERATAN, BALI</p>
          </div>
          <div class="d-flex justify-content-center py-4">
            <a href="#" class="btn btn-view-details px-4">View Details</a>
          </div>
        </div>
        <div class="section-popular-travel d-flex flex-column rounded mb-3" style="background-image: url('./frontend/images/popular2.jpg');">
          <div class="flex-grow-1 text-center py-4">
            <p class="m-0 fs-5">Indonesia</p>
            <p class="m-0 fs-5 fw-bold">BROMO, MALANG</p>
          </div>
          <div class="d-flex justify-content-center py-4">
            <a href="#" class="btn btn-view-details px-4">View Details</a>
          </div>
        </div>
        <div class="section-popular-travel d-flex flex-column rounded mb-3"
        style="background-image: url('./frontend/images/popular3.jpg');">
          <div class="flex-grow-1 text-center py-4">
            <p class="m-0 fs-5">Indonesia</p>
            <p class="m-0 fs-5 fw-bold">NUSA PENIDA, BALI</p>
          </div>
          <div class="d-flex justify-content-center py-4">
            <a href="/detail" class="btn btn-view-details px-4">View Details</a>
          </div>
        </div>
        <div class="section-popular-travel d-flex flex-column rounded mb-3"
        style="background-image: url('./frontend/images/popular4.jpg');">
          <div class="flex-grow-1 text-center py-4">
            <p class="m-0 fs-5">Midle East</p>
            <p class="m-0 fs-5 fw-bold">DUBAI, UEA</p>
          </div>
          <div class="d-flex justify-content-center py-4">
            <a href="#" class="btn btn-view-details px-4">View Details</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Networks -->
    <section class="section-networks py-5" id="networks">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
          <div class="section-networks-heading">
            <h2>Our Networks</h2>
            <p>Companies are trusted us <br>more than just a trip</p>
          </div>
          <div class="section-networks-logo">
            <div class="d-flex flex-wrap justify-content-around">
              <img src="./frontend/images/networks_logo/ana.png" alt="ana">
              <img src="./frontend/images/networks_logo/disney.png" alt="disney">
              <img src="./frontend/images/networks_logo/shangri-la.png" alt="shangri-la">
              <img src="./frontend/images/networks_logo/visa.png" alt="visa">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial -->
    <section class="section-testimonial py-5" id="testimonial">
      <div class="container text-center py-4">
        <h2>They Are Loving Us</h2>
        <p>Moment were giving them <br>the best experience</p>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center col-lg-4 col-md-12">
            <div class="card-testimonial border rounded shadow pt-4 mb-3">
              <img src="./frontend/images/user1.png" alt="user1">
              <p class="fw-bold fs-3">Jane</p>
              <p class="flex-grow-1 px-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
              <div class="border-top w-100 py-3">
                <p class="m-0">Trip to Ubud</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center col-lg-4 col-md-12">
            <div class="card-testimonial border rounded shadow pt-4 mb-3">
              <img src="./frontend/images/user2.png" alt="user2">
              <p class="fw-bold fs-3">John</p>
              <p class="flex-grow-1 px-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
              <div class="border-top w-100 py-3">
                <p class="m-0">Trip to Bromo</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-center col-lg-4 col-md-12">
            <div class="card-testimonial border rounded shadow pt-4 mb-3">
              <img src="./frontend/images/user3.png" alt="user3">
              <p class="fw-bold fs-3">Julia</p>
              <p class="flex-grow-1 px-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
              <div class="border-top w-100 py-3">
                <p class="m-0">Trip to Nusa Penida</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center py-5">
        <a href="#" class="btn btn-need-help mx-3 px-4">I Need Help</a>
        <a href="#" class="btn btn-get-started mx-3 px-4">Get Started</a>
      </div>
    </section>
  </main>
@endsection
