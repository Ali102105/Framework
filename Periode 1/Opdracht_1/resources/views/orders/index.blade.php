
@extends('layouts.layouts')

@section('content')
    <div class="card">
        @if ($errors->any())
            <div style="color: red; margin-bottom: 15px;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <button type="button" id="show-create-order" class="btn">
            Bestelling toevoegen
        </button>

        @foreach ($orders as $order)
            <div class="item">
                <div class="item-info">
                    <h3>Bestelling {{ $order->id }}</h3>
                    <p>Datum: {{ $order->orderdate }}</p>
                    <p>Status: {{ $order->status }}</p>
                </div>

                <div class="list-actions">
                    <a href="{{ route('orders.get', $order->id) }}" class="btn">
                        Bekijken
                    </a>

                    <form method="POST" action="{{ route('orders.delete', $order->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn"
                            onclick="return confirm('Weet je zeker dat je deze bestelling wilt verwijderen?')">
                            Verwijderen
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    @include('orders.partials.create')

@endsection
