@extends('layouts.layouts')

@section('content')

<div class="card">

    <h2>Product aanpassen</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Naam</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ $product->name }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="description">Beschrijving</label>

            <input
                type="text"
                id="description"
                name="description"
                value="{{ $product->description }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="category_id">Categorie ID</label>

            <input
                type="number"
                id="category_id"
                name="category_id"
                value="{{ $product->category_id }}"
                required
            >
        </div>

        <div class="form-actions">
            <a href="{{ route('products.index') }}" class="btn">
                Terug
            </a>

            <button type="submit" class="btn">
                Opslaan
            </button>
        </div>

    </form>

</div>

@endsection