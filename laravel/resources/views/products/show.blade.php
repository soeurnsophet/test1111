@extends('layouts.app')
@section('title')
    Show Product
@endsection
@section('content')
    <h1 class="bg-black">Product</h1>
    <h1>{{ $product->name }} - {{ $product->price }}</h1>
    <a href="{{ route('products.index') }}">Back to Product List</a>
@endsection
