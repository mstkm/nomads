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
  <div class="container d-md-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="/register" method="post" class="col-lg-4">
      @csrf
      <img src="{{ url('/frontend/images/nomads_logo/drawable-xhdpi/logo_nomads.png') }}" alt="nomads_logo" class="img-fluid mx-auto d-block mb-2" width="200">
      <h1 class="text-center mb-3">Registration</h1>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input your name" value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
        @enderror
      </div>
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
        @error('password')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Input your confirm password">
        @error('password_confirmation')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mt-4">
        <button class="btn btn-primary w-100">Register</button>
      </div>
      <p class="text-center my-3">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
