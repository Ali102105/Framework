@extends('layouts.layouts')

@section('content')
<div class="card">
    <h2>Rol details</h2>

    <div class="details">
        <p><strong>Naam:</strong> {{ $role->name }}</p>
    </div>

    <a href="{{ route('roles.index') }}" class="btn">
        Terug
    </a>
</div>
@endsection