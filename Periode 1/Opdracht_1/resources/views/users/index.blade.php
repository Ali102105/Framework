@extends('layouts.layouts')

@section('content')
    <div class="card">
        <button type="button" id="show-create-user" class="btn">
            Gebruiker toevoegen
        </button>

        @foreach ($users as $user)
            <div class="item">
                <div class="item-info">
                    <h3>{{ $user->name }}</h3>
                    <p>{{ $user->email }}</p>
                </div>

                <a href="{{ route('users.get', $user->id) }}" class="btn">
                    Bekijken
                </a>


                <form method="POST" action="{{ route('users.delete', $user->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn"
                        onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?')">
                        Verwijderen
                    </button>
                </form>

            </div>
        @endforeach
    </div>

    @include('users.partials.create')

@endsection