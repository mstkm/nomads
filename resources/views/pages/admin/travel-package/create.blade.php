@extends('layouts.admin')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">
    <div class="d-flex align-items-center justify-content-between ">
      <div>
        <h1 class="m-0">Tambah Paket Travel</h1>
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
    <form action="{{ url('admin/travel-package') }}" method="POST" class="my-4">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" class="form-control" id="location" value="{{ old('location') }}">
      </div>
      <div class="mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" placeholder="Description...." id="description" name="description">{{ old('description') }}</textarea>
      </div>
      <div class="mb-3">
        <label for="featured_event" class="form-label">Featured Event</label>
        <input type="text" name="featured_event" class="form-control" id="featured_event" value="{{ old('featured_event') }}">
      </div>
      <div class="mb-3">
        <label for="language" class="form-label">Language</label>
        <input type="text" name="language" class="form-control" id="language" value="{{ old('language') }}">
      </div>
      <div class="mb-3">
        <label for="foods" class="form-label">Foods</label>
        <input type="text" name="foods" class="form-control" id="foods" value="{{ old('foods') }}">
      </div>
      <div class="mb-3">
        <label for="departure_date" class="form-label">Departure Date</label>
        <input type="date" name="departure_date" class="form-control" id="departure_date" value="{{ old('departure_date') }}">
      </div>
      <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" name="duration" class="form-control" id="duration" value="{{ old('duration') }}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" name="type" class="form-control" id="type" value="{{ old('type') }}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" id="price" value="{{ old('price') }}">
      </div>
      <div>
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
    </form>
    {{-- End Form input --}}

  </div>
@endsection
