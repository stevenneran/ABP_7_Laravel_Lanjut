@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>Rp{{ number_format($product->price, 2) }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.show', $product->id) }}" method="GET" class="mr-1">
                                <button type="submit" class="btn btn-info btn-sm">View</button>
                            </form>
                            <form action="{{ route('products.edit', $product->id) }}" method="GET" class="mr-1">
                                <button type="submit" class="btn btn-info btn-sm">Edit</button>
                            </form>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
