@extends('layouts.layouts')

@section('title', 'Products')

@section('content')

    <div class="card">
        <button type="button" id="show-create-product" class="btn">
            Product toevoegen
        </button>

        @foreach ($products as $product)

            <div class="item">
                <div class="item-info">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                </div>

                <a href="{{ route('products.get', $product->id) }}" class="btn">
                    Bekijken
                </a>


                <form method="POST" action="{{ route('products.delete', $product->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn"
                        onclick="return confirm('Weet je zeker dat je dit product wilt verwijderen?')">
                        Verwijderen
                    </button>
                </form>

            </div>

        @endforeach

    </div>

    @include('products.partials.create')

@endsection