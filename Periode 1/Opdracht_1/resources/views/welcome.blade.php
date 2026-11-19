
@extends('layouts.layouts')

@section('title', "Ali's Game App | Home")

@section('content')

    <!-- HERO -->
    <section class="home-hero">
        <div class="home-hero-content">

            <span class="home-label">GAME MANAGEMENT SYSTEM</span>

            <h1>Welkom bij Ali's Game App</h1>

            <p>
                Beheer games, categorieën, bestellingen en gebruikers
                vanuit één overzichtelijke applicatie.
            </p>

            <div class="home-hero-actions">
                @auth
                    <a href="{{ route('products.index') }}" class="home-primary-btn">
                        Bekijk producten &rarr;
                    </a>
                @else
                    <a href="{{ route('login') }}" class="home-primary-btn">
                        Inloggen &rarr;
                    </a>
                @endauth
            </div>

        </div>
    </section>

    <!-- OVERZICHT -->
    <section class="home-overview">

        <div class="home-section-header">
            <span class="home-label-dark">DASHBOARD</span>
            <h2>Overzicht</h2>
            <p>Kies een onderdeel om de gegevens te bekijken.</p>
        </div>

        @auth
            <div class="home-cards">

                <a href="{{ route('products.index') }}" class="home-card">
                    <span class="home-card-icon">🎮</span>
                    <h3>Products</h3>
                    <p>Bekijk en beheer alle games en producten.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('categories.index') }}" class="home-card">
                    <span class="home-card-icon">📁</span>
                    <h3>Categories</h3>
                    <p>Beheer de verschillende productcategorieën.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('orders.index') }}" class="home-card">
                    <span class="home-card-icon">🛒</span>
                    <h3>Orders</h3>
                    <p>Bekijk en beheer geplaatste bestellingen.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('orderrows.index') }}" class="home-card">
                    <span class="home-card-icon">📦</span>
                    <h3>Orderrows</h3>
                    <p>Bekijk producten binnen bestellingen.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('prices.index') }}" class="home-card">
                    <span class="home-card-icon">💶</span>
                    <h3>Prices</h3>
                    <p>Bekijk en beheer de prijzen van producten.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('reviews.index') }}" class="home-card">
                    <span class="home-card-icon">⭐</span>
                    <h3>Reviews</h3>
                    <p>Bekijk reviews en reacties van gebruikers.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('users.index') }}" class="home-card">
                    <span class="home-card-icon">👤</span>
                    <h3>Users</h3>
                    <p>Bekijk en beheer de gebruikers.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

                <a href="{{ route('roles.index') }}" class="home-card">
                    <span class="home-card-icon">🔐</span>
                    <h3>Roles</h3>
                    <p>Beheer de verschillende gebruikersrollen.</p>
                    <span class="home-card-link">Bekijken &rarr;</span>
                </a>

            </div>
        @else
            <div class="home-guest">
                <h3>Welkom!</h3>
                <p>
                    Log in om toegang te krijgen tot het dashboard
                    en alle onderdelen van de applicatie.
                </p>

                <a href="{{ route('login') }}" class="home-primary-btn">
                    Inloggen
                </a>
            </div>
        @endauth

    </section>

@endsection
