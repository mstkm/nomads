@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Transactions</h1>
      </div>
    </div>

    <table class="table my-4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Travel Package</th>
          <th scope="col">Name</th>
          <th scope="col">Visa</th>
          <th scope="col">Total</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($transactions as $transaction)
          <tr>
            <td class="align-middle">{{ $transaction->id }}</td>
            <td class="align-middle">{{ $transaction->travel_package->title }}</td>
            <td class="align-middle">{{ $transaction->user->name }}</td>
            <td class="align-middle">{{ $transaction->additional_visa }}</td>
            <td class="align-middle">{{ $transaction->transaction_total }}</td>
            <td class="align-middle">{{ $transaction->transaction_status }}</td>
            <td class="align-middle">
              <a href="{{ route('transaction.show', $transaction->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye fa-sm fa-fw text-light"></i></a>
              <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen fa-sm fa-fw text-light"></i></a>
              <form action="{{ route('transaction.destroy', $transaction->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt fa-sm fa-fw text-light"></i></button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td class="text-center" colspan="7">No data.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
