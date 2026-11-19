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

        <button type="button" id="show-create-orderrow" class="btn">
            Orderregel toevoegen
        </button>

        @foreach ($orderrows as $orderrow)
            <div class="item">
                <div class="item-info">
                    <h3>Bestelling {{ $orderrow->order_id }}</h3>
                    <p>Product ID: {{ $orderrow->product_id }}</p>
                </div>

                <div class="list-actions">
                    <a href="{{ route('orderrows.get', $orderrow->id) }}" class="btn">
                        Bekijken
                    </a>

                    <form method="POST" action="{{ route('orderrows.delete', $orderrow->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn"
                            onclick="return confirm('Weet je zeker dat je deze orderregel wilt verwijderen?')">
                            Verwijderen
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    @include('orderrows.partials.create')

@endsection