<nav class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" onerror="this.onerror=null; this.src='https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg';" style="width: 50px; height: 50px;">
            <span>NomNom Food</span>
        </a>
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('restaurants') }}" class="{{ request()->routeIs('restaurants') ? 'active' : '' }}">Restaurants</a></li>
        <li><a href="{{ route('offers') }}" class="{{ request()->routeIs('offers') ? 'active' : '' }}">Deals</a></li>
        <li><a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">Categories</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>

    <div class="nav-buttons">
        @auth
            <span style="font-weight: 500; color: #333; margin-right: 15px; font-family: 'Poppins', sans-serif;">Welcome, {{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="login" style="border: 1px solid #e21b70; background: transparent; color: #e21b70; cursor: pointer; font-family: 'Poppins', sans-serif;">Log out</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="login">Log in</a>
            <a href="{{ route('register') }}" class="signup">Sign up</a>
        @endauth
    </div>

    <div class="hamburger" onclick="toggleMenu()">
        ☰
    </div>
</nav>

<script>
    function toggleMenu() {
        var links = document.getElementById("navLinks");
        if (links.classList.contains("active")) {
            links.classList.remove("active");
        } else {
            links.classList.add("active");
        }
    }
</script>
