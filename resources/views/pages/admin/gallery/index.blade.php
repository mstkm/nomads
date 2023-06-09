@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Gallery</h1>
      </div>
      <div>
        <a href="{{ route('gallery.create') }}" class="btn btn-primary"><i class="fas fa-plus fa-sm fa-fw mr-2 text-light"></i> Add Gallery</a>
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
          <th scope="col">Travel</th>
          <th scope="col">Gambar</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($galleries as $gallery)
          <tr>
            <td class="align-middle">{{ $gallery->id }}</td>
            <td class="align-middle">{{ $gallery->travel_package->title }}</td>
            <td class="align-middle"><img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->image }}" class="img-thumbnail" width="100"></td>
            <td class="align-middle">
              <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-pen fa-sm fa-fw text-light"></i></a>
              <form action="{{ route('gallery.destroy', $gallery->id) }}" method="post" class="d-inline">
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
