<!-- Navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid d-flex">
      <div class="flex-grow-1">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ url('/frontend/images/nomads_logo/drawable-xhdpi/logo_nomads.png') }}" alt="nomads_logo">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item pe-5">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item pe-5">
            <a class="nav-link {{ Request::is('detail') ? 'active' : '' }}" href="/#popular">Paket Travel</a>
          </li>
          <li class="nav-item pe-5 dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Link</a></li>
              <li><a class="dropdown-item" href="#">Link</a></li>
            </ul>
          </li>
          <li class="nav-item pe-5">
            <a class="nav-link" href="#testimonial">Testimonial</a>
          </li>
        </ul>
        @guest
        <div class="d-flex">
          <button class="btn btn-login" type="submit" onclick="event.preventDefault(); location.href='/login'">Masuk</button>
        </div>
        @endguest
        @auth
        <form class="d-flex" action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-login" href="#">Logout</button>
        </form>
        @endauth
      </div>
    </div>
  </nav>
</div>
