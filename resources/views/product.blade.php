@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="container">
      <h1>{{ $product->title }}</h1>
      <h1>{{ $product->image }}</h1>
    </div>
  </div>
@endsection