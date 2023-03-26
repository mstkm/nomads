<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nomads | Login</title>
  <link rel="stylesheet" href="{{ url('./frontend/libraries/bootstrap/css/bootstrap.css') }}" type="text/css"/>
</head>
<body>
  <div class="container d-lg-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="/login" method="post" class="col-lg-4">
      @csrf
      <img src="{{ url('/frontend/images/nomads_logo/drawable-xhdpi/logo_nomads.png') }}" alt="nomads_logo" class="img-fluid mx-auto d-block mb-2" width="200">
      <h1 class="text-center mb-3">Login</h1>
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input your email" value="{{ old('email') }}">
        @error('email')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Input your password">
        @error('email')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
        @enderror
        <div class="d-flex justify-content-end mt-2">
          <a href="/forgot-password" class="text-end text-decoration-none">Forgot Password?</a>
        </div>
      </div>
      <div class="mt-4">
        <button class="btn btn-primary w-100" type="submit">Login</button>
      </div>
      <p class="text-center my-3">Not registered? <a href="{{ route('register') }}" class="text-decoration-none">Register</a></p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
