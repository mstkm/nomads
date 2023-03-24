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
    <form action="" class="col-lg-4">
      @csrf
      <img src="{{ url('/frontend/images/nomads_logo/drawable-xhdpi/logo_nomads.png') }}" alt="nomads_logo" class="img-fluid mx-auto d-block mb-2" width="200">
      <h1 class="text-center mb-3">Register</h1>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Input your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Input your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Input your password">
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Confirm Password</label>
        <input name="confirm-password" type="confirm-password" class="form-control" id="confirm-password" placeholder="Input your confirm password">
      </div>
      <div class="mt-4">
        <button class="btn btn-primary w-100">Register</button>
      </div>
    </form>
  </div>
</body>
</html>
