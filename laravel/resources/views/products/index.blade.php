@extends('layouts.app')

@section('title')
    Products
@endsection

@section('content')
    <div class="container-fluid py-4">

        {{-- Page Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="mb-1">
                    <i class="bi bi-box-seam me-2"></i>
                    Products
                </h1>
                <p class="text-muted mb-0">
                    Manage your products
                </p>
            </div>

            <a href="{{ route('products.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Create Product
            </a>
        </div>


        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>
            </div>
        @endif


        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i>
                {{ session('error') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">
                </button>
            </div>
        @endif


        {{-- Product Table --}}
        <div class="card shadow-sm border-0">

            <div class="card-header bg-white py-3">
                <h5 class="mb-0">
                    Product List
                </h5>
            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover table-bordered mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Barcode</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($products as $product)
                                <tr>

                                    <td>
                                        {{ $product->id }}
                                    </td>

                                    <td>
                                        {{ $product->barcode }}
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $product->name }}
                                    </td>

                                    <td>
                                        ${{ number_format($product->price, 2) }}
                                    </td>

                                    <td>
                                        {{ $product->quantity }}
                                    </td>

                                    <td>
                                        {{ $product->description ?? 'No description' }}
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-center gap-2">

                                            {{-- Show --}}
                                            <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-sm btn-dark">
                                                <i class="bi bi-eye me-1"></i>
                                                Show
                                            </a>

                                            {{-- Edit
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil me-1"></i>
                                                Edit
                                            </a> --}}

                                            {{-- Delete --}}
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this product?');">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash me-1"></i>
                                                    Delete
                                                </button>

                                            </form>

                                        </div>
                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="text-center py-5">

                                        <i class="bi bi-inbox fs-1 text-muted"></i>

                                        <p class="text-muted mt-2 mb-0">
                                            No products found.
                                        </p>

                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>
@endsection
