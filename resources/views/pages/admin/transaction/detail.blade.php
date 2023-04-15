@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Detail Transaksi {{ $transaction->user->name }}</h1>
      </div>
    </div>

    {{-- Handle Error --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    {{-- End Handle Error --}}

    <div class="card-shadow my-4">
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <td>{{ $transaction->id }}</td>
          </tr>
          <tr>
            <th>Paket Travel</th>
            <td>{{ $transaction->travel_package->title }}</td>
          </tr>
          <tr>
            <th>Pembeli</th>
            <td>{{ $transaction->user->name }}</td>
          </tr>
          <tr>
            <th>Additional Visa</th>
            <td>${{ $transaction->additional_visa }}</td>
          </tr>
          <tr>
            <th>Total Transaksi</th>
            <td>${{ $transaction->transaction_total }}</td>
          </tr>
          <tr>
            <th>Status Transaksi</th>
            <td>{{ $transaction->transaction_status }}</td>
          </tr>
          <tr>
            <th>Pembelian</th>
            <td>
              <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Nationality</th>
                  <th>Visa</th>
                  <th>DOE Passport</th>
                </tr>
                @foreach ($transaction->details as $detail)
                  <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->name }}</td>
                    <td>{{ $detail->nationality }}</td>
                    <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                    <td>{{ $detail->doe_passport }}</td>
                  </tr>
                @endforeach
              </table>
            </td>
          </tr>
        </table>
      </div>
    </div>

  </div>
@endsection
