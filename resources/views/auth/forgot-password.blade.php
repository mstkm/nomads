<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nomads | Forgot Password</title>
  <link rel="stylesheet" href="{{ url('./frontend/libraries/bootstrap/css/bootstrap.css') }}" type="text/css"/>
</head>
<body>
  <div class="container d-lg-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="/forgot-password" method="post" class="col-lg-4">
      @csrf
      <img src="{{ url('/frontend/images/nomads_logo/drawable-xhdpi/logo_nomads.png') }}" alt="nomads_logo" class="img-fluid mx-auto d-block mb-2" width="200">
      <h1 class="text-center mb-3">Forgot Password</h1>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input your email" value="{{ old('email') }}" autofocus>
        @error('email')
          <div class="invalid-feedback ">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mt-4">
        <button class="btn btn-primary w-100" type="submit">Send Email Reset Password Link</button>
      </div>
        @if(session()->has('status'))
          <p class="text-success mt-2 text-center">{{ session('status') }}</p>
        @endif
    </form>
  </div>
</body>
</html>
