@extends('layouts.app')

@section('content')
    <h1>Mahsulotni tahrirlash</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="number" name="price" value="{{ $product->price }}">
        <button type="submit">Yangilash</button>
    </form>
@endsection
