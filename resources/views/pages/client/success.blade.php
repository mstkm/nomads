@extends('layouts.success')

@section('title', 'Nomads | Checkout Success')

@section('content')
  <main style="padding-top: 50px; padding-bottom: 50px;">
    <div class="container d-flex flex-column align-items-center text-center">
      <img src="{{ url('./frontend/images/mailbox.png') }}" alt="mailbox" width="200px">
      <h4 class="mt-5 fw-bold">Yay! Success</h4>
      <p>We've sent you email for trip instruction<br>please read it as well</p>
      <a href="{{ route('home') }}" class="btn text-white mt-5 px-4" style="background-color: #071c4d;">Homepage</a>
    </div>
  </main>
@endsection
