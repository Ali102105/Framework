@extends('layouts.layouts')

@section('title', 'Categories')

@section('content')

    <div class="card">
        <button type="button" id="show-create-category" class="btn">
            Categorie toevoegen
        </button>

        <ul class="list">
            @foreach ($categories as $category)
                <li class="list-item">

                    <span class="list-item-title">
                        {{ $category->name }}
                    </span>

                    <div class="list-actions">
                        <a href="{{ route('categories.get', $category->id) }}" class="btn">
                            Bekijken
                        </a>

                        <form method="POST" action="{{ route('categories.delete', $category->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn"
                                onclick="return confirm('Weet je zeker dat je deze categorie wilt verwijderen?')">
                                Verwijderen
                            </button>
                        </form>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>

    @include('categories.partials.create')

@endsection