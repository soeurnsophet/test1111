@extends('layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Card --}}
                <div class="card shadow-sm border-0">

                    {{-- Card Header --}}
                    <div class="card-header bg-primary text-white py-3">
                        <h4 class="mb-0">
                            <i class="bi bi-box-seam me-2"></i>
                            Create Product
                        </h4>
                    </div>

                    {{-- Form --}}
                    <div class="card-body p-4">

                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">

                                {{-- Barcode --}}
                                <div class="col-md-6">
                                    <label for="barcode" class="form-label fw-semibold">
                                        Product Barcode
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-upc-scan"></i>
                                        </span>

                                        <input type="text" id="barcode" name="barcode" class="form-control"
                                            placeholder="Enter barcode" value="{{ old('barcode') }}">
                                    </div>
                                </div>

                                {{-- Product Name --}}
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-semibold">
                                        Product Name
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-box"></i>
                                        </span>

                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Enter product name" value="{{ old('name') }}">
                                    </div>
                                </div>

                                {{-- Price --}}
                                <div class="col-md-6">
                                    <label for="price" class="form-label fw-semibold">
                                        Price ($)
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">$</span>

                                        <input type="number" id="price" name="price" class="form-control"
                                            placeholder="0.00" step="0.01" min="0" value="{{ old('price') }}">
                                    </div>
                                </div>

                                {{-- Quantity --}}
                                <div class="col-md-6">
                                    <label for="quantity" class="form-label fw-semibold">
                                        Quantity
                                    </label>

                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-123"></i>
                                        </span>

                                        <input type="number" id="quantity" name="quantity" class="form-control"
                                            placeholder="0" min="0" value="{{ old('quantity') }}">
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="col-12">
                                    <label for="description" class="form-label fw-semibold">
                                        Description
                                    </label>

                                    <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter brief description">{{ old('description') }}</textarea>
                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="d-flex justify-content-end gap-2 mt-4">

                                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    Cancel
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-lg me-1"></i>
                                    Create Product
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
