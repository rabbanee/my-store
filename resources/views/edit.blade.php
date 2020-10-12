@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" value="{{ $product->title }}" class="form-control" id="title">
        </div>
        <div class="form-group">
          <label for="image">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <img src="{{ Storage::url("public/images/$product->image") }}" width="120">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" name="price" value="{{ $product->price }}" class="form-control" id="price">
        </div>
        <button type="submit" class="btn btn-success">Save Changes</button>
      </form>
    </div>
  </div>
@endsection