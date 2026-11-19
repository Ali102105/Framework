@extends('layouts.layouts')

@section('content')
<div class="card">
    <h2>Orderregel details</h2>

    <div class="details">
        <p><strong>ID:</strong> {{ $orderrow->id }}</p>
        <p><strong>Bestelling ID:</strong> {{ $orderrow->order_id }}</p>
        <p><strong>Product ID:</strong> {{ $orderrow->product_id }}</p>
    </div>

    <a href="{{ route('orderrows.index') }}" class="btn">
        Terug
    </a>
</div>
@endsection