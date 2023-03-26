<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nomads | Verifify Email</title>
  <link rel="stylesheet" href="{{ url('./frontend/libraries/bootstrap/css/bootstrap.css') }}" type="text/css"/>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center flex-column col-lg-6" style="height: 100vh;">
    <div>
      <h1>Verifikasi Email</h1>
      <p>Thanks for signing up! Before to the checkout page, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
    </div>
    <form action="/email/verification-notification" method="post">
      @csrf
      <button class="btn btn-primary" type="submit">Resend Verification Email</button>
    </form>

    @if(session()->has('message'))
    <p class="text-success">{{ session('message') }}</p>
    @endif
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
