@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> Rp{{ number_format($product->price, 2) }}</p>
    <form action="{{ route('products.edit', $product->id) }}" method="GET" class="mr-1">
        <button type="submit" class="btn btn-info btn-sm">Edit</button>
    </form>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
