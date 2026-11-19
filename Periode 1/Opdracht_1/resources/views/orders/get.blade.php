@extends('layouts.layouts')

@section('content')
<div class="card">
    <h2>Bestelling details</h2>

    <div class="details">
        <p><strong>Bestelling ID:</strong> {{ $order->id }}</p>
        <p><strong>Datum:</strong> {{ $order->orderdate }}</p>
        <p><strong>Gebruiker ID:</strong> {{ $order->user_id }}</p>
        <p><strong>Status:</strong> {{ $order->status }}</p>
    </div>

    <a href="{{ route('orders.index') }}" class="btn">
        Terug
    </a>
</div>
@endsection