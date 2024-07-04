<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('destinations.show') }}">Destinations</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        @if (Route::has('login'))

            @auth
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.home') }}">Dashboard</a></li>
                @endif
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endif
            @endauth

        @endif



    </ul>
</nav>
