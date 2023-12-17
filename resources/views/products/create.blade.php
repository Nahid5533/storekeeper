@extends('layouts.app')

@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" required>
        </div>
        <button type="submit">Add Product</button>
    </form>
@endsection
