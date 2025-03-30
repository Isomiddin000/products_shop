@extends('layouts.app')

@section('content')
    <h1>Mahsulotlar</h1>
    <a href="{{ route('products.create') }}">Yangi mahsulot qoʻshish</a>

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }} - {{ $product->price }} soʻm</a>
                <a href="{{ route('products.edit', $product->id) }}">Tahrirlash</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Oʻchirish</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
