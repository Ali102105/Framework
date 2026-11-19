@extends('layouts.layouts')

@section('content')
    <div class="card">
        <button type="button" id="show-create-price" class="btn">
            Prijs toevoegen
        </button>

        @foreach ($prices as $price)
            <div class="item">
                <div class="item-info">
                    <h3>€ {{ number_format($price->price, 2, ',', '.') }}</h3>
                    <p>Product ID: {{ $price->product_id }}</p>
                    <p>Vanaf: {{ $price->effdate }}</p>
                </div>

                <a href="{{ route('prices.get', $price->id) }}" class="btn">
                    Bekijken
                </a>


                <form method="POST" action="{{ route('prices.delete', $price->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn"
                        onclick="return confirm('Weet je zeker dat je deze prijs wilt verwijderen?')">
                        Verwijderen
                    </button>
                </form>
                
            </div>
        @endforeach
    </div>

    @include('prices.partials.create')

@endsection