@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Paket Travel</h1>
      </div>
      <div>
        <a href="/admin/travel-package/create" class="btn btn-primary"><i class="fas fa-plus fa-sm fa-fw mr-2 text-light"></i> Add Travel Package</a>
      </div>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <table class="table my-4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Location</th>
          <th scope="col">Type</th>
          <th scope="col">Departure Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($travelPackages as $travelPackage)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $travelPackage->title }}</td>
            <td>{{ $travelPackage->location }}</td>
            <td>{{ $travelPackage->type }}</td>
            <td>{{ $travelPackage->departure_date }}</td>
            <td></td>
          </tr>
        @empty
          <tr>
            <td class="text-center" colspan="6">No data.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
@endsection
