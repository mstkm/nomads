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
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="/login" method="post" class="col-lg-4">
      @csrf
      <img src="{{ url('/frontend/images/nomads_logo/drawable-xhdpi/logo_nomads.png') }}" alt="nomads_logo" class="img-fluid mx-auto d-block mb-2" width="200">
      <h1 class="text-center mb-3">Login</h1>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Input your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Input your password">
        <div class="d-flex justify-content-end mt-2">
          <a href="/forgot-password" class="text-end">Forgot Password?</a>
        </div>
      </div>
      <div class="mt-4">
        <button class="btn btn-primary w-100" type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
