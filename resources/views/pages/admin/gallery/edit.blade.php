@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container px-4">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Edit Gallery</h1>
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
    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" class="my-4" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="travel_package_id">Travel Package</label>
        <select class="form-select" name="travel_package_id">
          <option selected hidden value="{{ $gallery->travel_package_id }}">{{ $gallery->travel_package->title }}</option>
          @foreach ($travel_packages as $travel_package)
            <option value="{{ $travel_package->id }}">{{ $travel_package->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input name="image" class="form-control" type="file" id="image" accept="image/png, image/jpeg">
      </div>
      <div>
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
    </form>
    {{-- End Form input --}}

  </div>
@endsection
