@extends('app')
@section('content')


<div><a class="btn btn-success" href="/">Home</a></div>
    <div><a class="btn btn-secondary" href="{{ route('products.create')}}">New Product</a></div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


@if(session('message'))
<div style="color: green;">{{session('message')}}</div>
@endif

<table class="table table-bordered table-hover" >
  <thead>
    <tr>
      <td>No.</td>
      <td>Name</td>
      <td>Price</td>
      <td>Category</td>
      <td>Action</td>
    </tr>
  </thead>

  <tbody>
    @forelse($products as $key => $product)
    <tr>
      <td>{{ $products->firstItem() + $key}}.</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->price }}</td>
      <td>
        {{ $product->category->name}}
      </td>
      <td>
        <a href="{{ route('products.edit', $product) }}"><class="btn btn-info><i class="bi bi-pencil-square"></i></a>

        <form action="{{ route('products.delete', $product) }}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger"> <i class="bi bi-trash"></i></button>
        </form>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5">No data found in table</td>
    </tr>
    @endforelse
  </tbody>
</table>