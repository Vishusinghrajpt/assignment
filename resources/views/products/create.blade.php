@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="cal-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>{{ isset($product) ? 'Edit' : 'Add' }} Product</h2>
                </div>
                <div class="card-body">
                    <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($product))
                        @method('PUT')
                        @endif
                        <!-- Product Name -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', isset($product) ? $product->name : '') }}" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Price -->
                            <div class="mb-3 col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price', isset($product) ? $product->price : '') }}" step="0.01"
                                    required>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror"
                                    value="{{ old('quantity', isset($product) ? $product->quantity : '') }}" required>
                                @error('quantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Save' }}
                            Product
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection