<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('destinations.show') }}">Destinations</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('orders.history') }}" class="nav-link">Orders History</a>
        </li>
        <li class="nav-item"><a href="{{ route('profile.edit') }}" class="nav-link">Profile</a></li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                        class="btn btn-danger">
                    {{ __('Log Out') }}
                </a>
            </form>
        </li>
    </ul>
</nav>
