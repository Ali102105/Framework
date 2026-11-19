@extends('layouts.layouts')

@section('content')
<div class="card">
    <h2>Gebruiker details</h2>

    <div class="details">
        <p><strong>Naam:</strong> {{ $user->name }}</p>
        <p><strong>E-mail:</strong> {{ $user->email }}</p>
        <p><strong>Rol ID:</strong> {{ $user->role_id }}</p>
    </div>

    <a href="{{ route('users.index') }}" class="btn">
        Terug
    </a>
</div>
@endsection