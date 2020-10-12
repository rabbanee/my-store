@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="container">
       <a href="{{ route('products.create')  }}" class="btn btn-sm btn-primary">
          Add
       </a>
      <table class="table table-striped">
         <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $i => $product)
            <tr>
              <td>{{ $products->firstItem() + $i }}</td>
              <td>{{ $product->title }}</td>
              <td>{{ $product->slug }}</td>
              <td><img src="{{ Storage::url('public/images/') . $product->image }}" width="120"></td>
              <td>{{ $product->price }}</td>
              <td>
                <a href="{{ url("products/$product->slug/edit")  }}" class="btn btn-sm btn-success btn-edit">
                Edit
                </a>
                <form action="{{ route('products.destroy', $product->slug) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $products->links() }}
    </div>
  </div>
@endsection