@extends('layouts.layouts')

@section('content')
    <div class="card">
        <button type="button" id="show-create-review" class="btn">
            Review toevoegen
        </button>

        @foreach ($reviews as $review)
            <div class="item">
                <div class="item-info">
                    <h3>{{ $review->comment }}</h3>
                    <p>Product ID: {{ $review->product_id }}</p>
                </div>

                <a href="{{ route('reviews.get', $review->id) }}" class="btn">
                    Bekijken
                </a>


                <form method="POST" action="{{ route('reviews.delete', $review->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn"
                        onclick="return confirm('Weet je zeker dat je deze review wilt verwijderen?')">
                        Verwijderen
                    </button>
                </form>

            </div>
        @endforeach
    </div>

    @include('reviews.partials.create')

@endsection