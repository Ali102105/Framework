<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Webshop')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="site-header">
        <div class="container navbar">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="navbar-logo">
                Ali's Game App<span>.</span>
            </a>

            <!-- Mobiel menu -->
            <button type="button" class="navbar-toggle" id="navbar-toggle" aria-label="Menu openen"
                aria-controls="navbar-menu" aria-expanded="false">
                ☰
            </button>

            <!-- Navigatie -->
            <nav class="navbar-menu" id="navbar-menu">

                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>

                @auth
                    <a href="{{ route('categories.index') }}"
                        class="{{ request()->routeIs('categories.*') ? 'active' : '' }}">
                        Categories
                    </a>

                    <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'active' : '' }}">
                        Products
                    </a>

                    <a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.*') ? 'active' : '' }}">
                        Orders
                    </a>

                    <a href="{{ route('orderrows.index') }}"
                        class="{{ request()->routeIs('orderrows.*') ? 'active' : '' }}">
                        Orderrows
                    </a>

                    <a href="{{ route('prices.index') }}" class="{{ request()->routeIs('prices.*') ? 'active' : '' }}">
                        Prices
                    </a>

                    <a href="{{ route('reviews.index') }}" class="{{ request()->routeIs('reviews.*') ? 'active' : '' }}">
                        Reviews
                    </a>

                    <a href="{{ route('roles.index') }}" class="{{ request()->routeIs('roles.*') ? 'active' : '' }}">
                        Roles
                    </a>

                    <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">
                        Users
                    </a>
                @endauth

                <!-- Login / Logout -->
                <div class="navbar-auth">

                    @guest
                        <a href="{{ route('login') }}" class="navbar-login">
                            Inloggen
                        </a>
                    @endguest

                    @auth
                        <span class="navbar-user">
                            {{ auth()->user()->name }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="navbar-logout">
                                Uitloggen
                            </button>
                        </form>
                    @endauth

                </div>

            </nav>

        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

</body>

</html>