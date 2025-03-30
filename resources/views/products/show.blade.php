@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Narxi: {{ $product->price }} soʻm</p>
    <a href="{{ route('products.index') }}">Ortga</a>
@endsection

