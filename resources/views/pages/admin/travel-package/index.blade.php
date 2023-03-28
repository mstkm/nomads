@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Paket Travel</h1>
      </div>
      <div>
        <a href="#" class="btn btn-primary"><i class="fas fa-plus fa-sm fa-fw mr-2 text-light"></i> Add Travel Package</a>
      </div>
    </div>

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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
