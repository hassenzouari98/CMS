<nav class="navbar top-navbar has-shadow" role="navigation" aria-label="main navigation">

    <!-- Navbar Brand -->
    <div class="navbar-brand">

        <!-- Logo -->
        <a class="navbar-item"  href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="112" height="28">
            {{ config('app.name', 'Laravel') }}
        </a>

        <!-- Humburger -->
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>

    </div>

    <!-- Navbar Menu -->
    <div class="navbar-menu">

        <!-- Right Navbar -->
        <div class="navbar-start">
            <a class="navbar-item">
                Learn
            </a>
            <a class="navbar-item">
                Share
            </a>
            <a class="navbar-item">
                Discuss
            </a>
        </div>

        <!-- Left Navbar -->
        <div class="navbar-end">

            <!-- Guest Links -->
            @guest
                <a class="navbar-item" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                <a class="navbar-item" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            @endguest

            <!-- Authed Links -->
            @auth
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item">
                            <i class="fas fa-user-alt"></i> 
                            <span class="p-l-5">Profile</span>
                        </a>
                        <a class="navbar-item">
                            <i class="fas fa-bell"></i> 
                            <span class="p-l-5">Notifications</span>
                        </a>
                        <a class="navbar-item">
                            <i class="fas fa-sliders-h"></i> 
                            <span class="p-l-5">Settings</span>
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> 
                            <span class="p-l-5">{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
        </div>

    </div>
</nav>