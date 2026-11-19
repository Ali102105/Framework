@extends('layouts.layouts')

@section('content')
<div class="card">
    <h2>Prijs details</h2>

    <div class="details">
        <p>
            <strong>Prijs:</strong>
            € {{ number_format($price->price, 2, ',', '.') }}
        </p>

        <p><strong>Product ID:</strong> {{ $price->product_id }}</p>
        <p><strong>Ingangsdatum:</strong> {{ $price->effdate }}</p>
    </div>

    <a href="{{ route('prices.index') }}" class="btn">
        Terug
    </a>
</div>
@endsection