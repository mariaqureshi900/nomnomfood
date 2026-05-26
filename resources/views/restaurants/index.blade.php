@extends('layouts.app')

@section('content')
    <section class="content-block">
        <h2>Restaurants</h2>
    </section>

    <section class="search-section">
        <input type="text" placeholder="Search restaurants or food...">
    </section>

    <div class="filters">
        <button type="button">All</button>
        <button type="button">Pizza</button>
        <button type="button">Burger</button>
        <button type="button">Biryani</button>
        <button type="button">BBQ</button>
        <button type="button">Dessert</button>
    </div>

    <section class="restaurant-page">
        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Lahori Flames">
            <div class="card-content">
                <h3>Lahori Flames</h3>
                <p>⭐ 4.8 • 25 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Brew Bliss">
            <div class="card-content">
                <h3>Brew Bliss</h3>
                <p>⭐ 4.7 • 20 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Ziaqa Mahal">
            <div class="card-content">
                <h3>Ziaqa Mahal</h3>
                <p>⭐ 4.9 • 18 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Smash House">
            <div class="card-content">
                <h3>Smash House</h3>
                <p>⭐ 4.6 • 30 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Kabab Spice">
            <div class="card-content">
                <h3>Kabab Spice</h3>
                <p>⭐ 4.9 • 18 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Turkish Restaurant">
            <div class="card-content">
                <h3>Turkish Restaurant</h3>
                <p>⭐ 4.8 • 15 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Basil and Brick">
            <div class="card-content">
                <h3>Basil and Brick</h3>
                <p>⭐ 4.5 • 20 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Casa Di Pasta">
            <div class="card-content">
                <h3>Casa Di Pasta</h3>
                <p>⭐ 4.8 • 30 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Smoke Tandoor">
            <div class="card-content">
                <h3>Smoke Tandoor</h3>
                <p>⭐ 4.7 • 25 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Lavender Lounge">
            <div class="card-content">
                <h3>Lavender Lounge</h3>
                <p>⭐ 4.8 • 40 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="BBQ Grill">
            <div class="card-content">
                <h3>BBQ Grill</h3>
                <p>⭐ 4.4 • 10 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="The Salad House">
            <div class="card-content">
                <h3>The Salad House</h3>
                <p>⭐ 4.3 • 33 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="The Sweet Cafe">
            <div class="card-content">
                <h3>The Sweet Cafe</h3>
                <p>⭐ 4.9 • 30 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Lahori Biryani">
            <div class="card-content">
                <h3>Lahori Biryani</h3>
                <p>⭐ 4.8 • 35 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Biryani House">
            <div class="card-content">
                <h3>Biryani House</h3>
                <p>⭐ 4.9 • 19 min</p>
            </div>
        </div>

        <div class="restaurant-card">
            <img src="{{ asset('images/restaurant-placeholder.svg') }}" alt="Pizza Twirl">
            <div class="card-content">
                <h3>Pizza Twirl</h3>
                <p>⭐ 4.8 • 12 min</p>
            </div>
        </div>
    </section>
@endsection