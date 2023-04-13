@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Edit Transaksi {{ $transaction->id }}</h1>
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

    {{-- Form input --}}
    <form action="{{ route('transaction.update', $transaction->id) }}" method="post" class="my-4">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="transaction_status" class="form-label">Status</label>
        <select name="transaction_status" class="form-control" required>
          @if ($transaction->transaction_status)
            <option value="{{ $transaction->transaction_status }}" hidden selected>{{ $transaction->transaction_status }}</option>
          @else
            <option value="{{ null }}" hidden selected>Pilih Status</option>
          @endif
            <option value="IN_CART">IN_CART</option>
            <option value="PENDING">PENDING</option>
            <option value="SUCCESS">SUCCESS</option>
            <option value="CANCEL">CANCEL</option>
            <option value="FAILED">FAILED</option>
        </select>
      </div>
      <div>
        <button class="btn btn-primary" type="submit">Update</button>
      </div>
    </form>
    {{-- End Form input --}}

  </div>
@endsection
