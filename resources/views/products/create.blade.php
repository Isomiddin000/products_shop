@extends('layouts.app')

@section('content')
    <h1>Yangi mahsulot qoʻshish</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Mahsulot nomi">
        <input type="number" name="price" placeholder="Narxi">
        <button type="submit">Saqlash</button>
    </form>
    
@endsection
