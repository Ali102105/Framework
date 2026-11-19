@extends('layouts.layouts')

@section('content')
<div class="card">
    <h2>Review details</h2>

    <div class="details">
        <p><strong>Review:</strong> {{ $review->comment }}</p>
        <p><strong>Gebruiker ID:</strong> {{ $review->user_id }}</p>
        <p><strong>Product ID:</strong> {{ $review->product_id }}</p>
    </div>

    <a href="{{ route('reviews.index') }}" class="btn">
        Terug
    </a>
</div>
@endsection