@extends('layouts.layouts')

@section('content')
    <div class="card">
        <button type="button" id="show-create-role" class="btn">
            Rol toevoegen
        </button>

        @foreach ($roles as $role)
            <div class="item">
                <div class="item-info">
                    <h3>{{ $role->name }}</h3>
                </div>

                <a href="{{ route('roles.get', $role->id) }}" class="btn">
                    Bekijken
                </a>


                <form method="POST" action="{{ route('roles.delete', $role->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn"
                        onclick="return confirm('Weet je zeker dat je deze rol wilt verwijderen?')">
                        Verwijderen
                    </button>
                </form>

            </div>
        @endforeach
    </div>

    @include('roles.partials.create')

@endsection