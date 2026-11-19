@extends('layouts.layouts')

@section('title', 'Inloggen')

@section('content')

<div class="card">
    <h1>Inloggen</h1>

    <form method="POST" action="{{ route('login') }}" class="form">
        @csrf

        <div class="form-group">
            <label for="email" class="form-label">
                E-mailadres
            </label>

            <input type="email" id="email" name="email"
                class="form-input" value="{{ old('email') }}" required>

            @error('email')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label">
                Wachtwoord
            </label>

            <input type="password" id="password" name="password"
                class="form-input" required>

            @error('password')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn">
            Inloggen
        </button>
    </form>
</div>

@endsection
