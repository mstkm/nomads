@extends('layouts.checkout')

@section('title', 'Nomads | Checkout')

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
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0 mb-3">
          <div class="card card-details p-4">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <h5 class="fw-bold">Who is Going?</h5>
            <p>Trip to {{ $transaction->travel_package->title }}, {{ $transaction->travel_package->location }}</p>
            <table class="text-center">
              <tbody>
                <tr>
                  <td>
                    <p class="m-0 py-3" class="m-0">Picture</p>
                  </td>
                  <td>
                    <p class="m-0 py-3">Name</p>
                  </td>
                  <td>
                    <p class="m-0 py-3">Nationality</p>
                  </td>
                  <td>
                    <p class="m-0 py-3">VISA</p>
                  </td>
                  <td>
                    <p class="m-0 py-3">Passport</p>
                  </td>
                </tr>
                @forelse ($transaction->details as $detail)
                  <tr>
                    <td class="user-going py-2">
                      <img src="https://ui-avatars.com/api/?name={{ $detail->name }}" alt="user2">
                    </td>
                    <td>
                      <p class="m-0">{{ $detail->name }}</p>
                    </td>
                    <td>
                      <p class="m-0">{{ $detail->nationality }}</p>
                    </td>
                    <td>
                      <p class="m-0">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</p>
                    </td>
                    <td>
                      <p class="m-0">
                        {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                      </p>
                    </td>
                    <td>
                      <a href="{{ route('checkout-remove', $detail->id) }}">
                        remove
                      </a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6" class="text-center">No visitor</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
            <h5 class="mt-4 fw-bold">Add Member</h5>
            <form action="{{ route('checkout-create', $transaction->id) }}" method="post" class="d-flex flex-column flex-md-row">
              @csrf
              <!-- Name -->
              <label for="name" class="visually-hidden">Name</label>
              <input type="text" class="form-control me-sm-3 mb-3" id="name" name="name" placeholder="Name" required>
              <!-- Nationality -->
              <label for="nationality" class="visually-hidden">Nationality</label>
              <input type="text" class="form-control me-sm-3 mb-3" id="nationality" name="nationality" placeholder="Nationality" required>
              <!-- Visa -->
              <label for="is_visa" class="visually-hidden">Visa</label>
              <select type="text" class="form-select me-sm-3 mb-3" id="is_visa" name="is_visa" required>
                <option value="{{ null }}" selected>VISA</option>
                <option value="1">30 Days</option>
                <option value="0">N/A</option>
              </select>
              <!-- DOE Passport -->
              <label for="doe_passport" class="visually-hidden">Visa</label>
              <input type="text" onfocus="type='date'" class="form-control me-sm-3 mb-3" id="doe_passport" name="doe_passport" placeholder="DOE Passport">
              <button class="btn btn-add-member form-control mb-3" type="submit">Add Now</button>
            </form>
            <h5 class="mt-4 fw-bold">Note</h5>
            <p>You are only able to invite member that has registered in Nomads</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <div class="p-4">
              <h5 class="fw-bold">Checkout Informations</h5>
              <div class="pt-2">
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Members</p>
                  <p class="mb-2">{{ $transaction->details->count() }} Persons</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Additional Visa</p>
                  <p  class="mb-2">${{ $transaction->additional_visa }},00</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Trip Price</p>
                  <p class="mb-2">${{ $transaction->travel_package->price }} / person</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Sub Total</p>
                  <p class="mb-2">${{ $transaction->transaction_total }},00</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Total(+Unique Code)</p>
                  <p class="mb-2 fw-bold">${{ $transaction->transaction_total }},<span class="fw-bold" style="color: #fc7205;">{{ mt_rand(0,99) }}</span></p>
                </div>
                <h5 class="fw-bold pt-4 mt-4 border-top">Payment Instructions</h5>
                <p>Please complete your payment before to continue the wonderful trip</p>
                <div class="pt-2">
                  <div class="d-flex align-items-center">
                    <div class="me-3">
                      <img src="{{ url('./frontend/images/creditcard.png') }}" alt="credit-card" style="border-radius: 0;">
                    </div>
                    <div>
                      <p class="m-0">PT Nomads ID</p>
                      <p class="m-0">0881 8829 8800</p>
                      <p class="m-0">Bank Central Asia</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3">
                    <div class="me-3">
                      <img src="{{ url('./frontend/images/creditcard.png') }}" alt="credit-card" style="border-radius: 0;">
                    </div>
                    <div>
                      <p class="m-0">PT Nomads ID</p>
                      <p class="m-0">0899 8501 7888</p>
                      <p class="m-0">Bank HSBC</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="{{ route('checkout-success', $transaction->id) }}" class="btn btn-payment">I Have Made Payment</a>
          </div>
          <div class="d-flex justify-content-center py-3">
            <a href="{{ route('detail', $transaction->travel_package->slug) }}" class="btn text-decoration-underline">Cancel Booking</a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
