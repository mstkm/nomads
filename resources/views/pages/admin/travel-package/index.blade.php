@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Paket Travel</h1>
      </div>
      <div>
        <a href="/admin/travel-package/create" class="btn btn-primary"><i class="fas fa-plus fa-sm fa-fw mr-2 text-light"></i> Add Travel Package</a>
      </div>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success fade show mt-4" role="alert">
        {{ session('success') }}
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
            <td class="align-middle">{{ $travelPackage->id }}</td>
            <td class="align-middle">{{ $travelPackage->title }}</td>
            <td class="align-middle">{{ $travelPackage->location }}</td>
            <td class="align-middle">{{ $travelPackage->type }}</td>
            <td class="align-middle">{{ $travelPackage->departure_date }}</td>
            <td class="align-middle">
              <a href="travel-package/{{ $travelPackage->id }}/edit" class="btn btn-sm btn-warning"><i class="fas fa-pen fa-sm fa-fw text-light"></i></a>
              <form action="{{ route('travel-package.destroy', $travelPackage->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash-alt fa-sm fa-fw text-light"></i></button>
              </form>
            </td>
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
