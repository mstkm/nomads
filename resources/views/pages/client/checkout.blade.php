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
            <h5 class="fw-bold">Who is Going?</h5>
            <p>Trip to Ubud Bali Indonesia</p>
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
                <tr>
                  <td class="user-going py-2">
                    <img src="{{ url('./frontend/images/user2.png') }}" alt="user2">
                  </td>
                  <td>
                    <p class="m-0">John</p>
                  </td>
                  <td>
                    <p class="m-0">UK</p>
                  </td>
                  <td>
                    <p class="m-0">30 Days</p>
                  </td>
                  <td>
                    <p class="m-0">Active</p>
                  </td>
                  <td>
                    <button class="btn m-0" style="font-size: 20px;">&#x2716;</button>
                  </td>
                </tr>
                <tr>
                  <td class="user-going py-2">
                    <img src="{{  url('./frontend/images/user1.png') }}" alt="user1">
                  </td>
                  <td>
                    <p class="m-0">Jane</p>
                  </td>
                  <td>
                    <p class="m-0">UK</p>
                  </td>
                  <td>
                    <p class="m-0">30 Days</p>
                  </td>
                  <td>
                    <p class="m-0">Active</p>
                  </td>
                  <td>
                    <button class="btn m-0" style="font-size: 20px;">&#x2716;</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <h5 class="mt-4 fw-bold">Add Member</h5>
            <form action="" class="d-flex flex-column flex-md-row">
              <label for="inputUsername" class="visually-hidden">Name</label>
              <input type="text" class="form-control me-sm-3 mb-3" id="inputUsername" name="inputUsername" placeholder="Username">
              <label for="inputVisa" class="visually-hidden">Visa</label>
              <select type="text" class="form-select me-sm-3 mb-3" id="inputVisa" name="inputVisa" placeholder="Username">
                <option value="visa" selected>VISA</option>
                <option value="30 Days">30 Days</option>
                <option value="N/A">N/A</option>
              </select>
              <label for="inputDoePassport" class="visually-hidden">Visa</label>
              <input type="text" onfocus="type='date'" class="form-control me-sm-3 mb-3" id="inputDoePassport" name="inputDoePassport" placeholder="DOE Passport">
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
                  <p class="mb-2">2 Persons</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Additional Visa</p>
                  <p  class="mb-2">$190,00</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Trip Price</p>
                  <p class="mb-2">$80 / person</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Sub Total</p>
                  <p class="mb-2">$280,00</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Total(+Unique Code)</p>
                  <p class="mb-2 fw-bold">$279,<span class="fw-bold" style="color: #fc7205;">33</span></p>
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
            <a href="{{ route('checkout-success') }}" class="btn btn-payment">I Have Made Payment</a>
          </div>
          <div class="d-flex justify-content-center py-3">
            <a href="{{ route('detail') }}" class="btn text-decoration-underline">Cancel Booking</a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
