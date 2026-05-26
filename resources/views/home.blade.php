@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <h1>Delicious food delivered to your door</h1>
            <p>Order your favourite meals from the best restaurants near you with Foodpanda Clone.</p>
            <div class="hero-search">
                <input type="text" placeholder="Enter your delivery address">
                <button type="button">Find Food</button>
            </div>
        </div>
    </section>

    <section class="fp-categories">
        <h2>Explore Categories</h2>
        <div class="fp-category-wrapper">
            <div class="fp-category-item">
                <img src="{{ asset('images/category-italian.svg') }}" alt="Italian food">
                <p>Italian</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-chinese.svg') }}" alt="Chinese food">
                <p>Chinese</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-pizza.svg') }}" alt="Pizza">
                <p>Pizza</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-burger.svg') }}" alt="Burger">
                <p>Burger</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-fastfood.svg') }}" alt="Fast Food">
                <p>Fast Food</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-healthy.svg') }}" alt="Healthy">
                <p>Healthy</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-dessert.svg') }}" alt="Desserts">
                <p>Desserts</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-pakistani.svg') }}" alt="Pakistani">
                <p>Pakistani</p>
            </div>
            <div class="fp-category-item">
                <img src="{{ asset('images/category-seafood.svg') }}" alt="Seafood">
                <p>Seafood</p>
            </div>
        </div>
    </section>

    <section class="all-restaurants">
        <div class="section-header">
            <h2>All Restaurants</h2>
            <a href="{{ route('restaurants') }}" class="view-all">View All →</a>
        </div>

        <div class="restaurant-grid">
            <div class="restaurant-card">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=500" alt="Pranzo restaurant">
                <div class="card-content">
                    <h3>Pranzo</h3>
                    <p>Pizza • Fast Food</p>
                    <span>⭐ 4.8 • 25 min</span>
                </div>
            </div>
            <div class="restaurant-card">
                <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?w=500" alt="Builder Burger restaurant">
                <div class="card-content">
                    <h3>Builder Burger</h3>
                    <p>Burgers</p>
                    <span>⭐ 4.7 • 20 min</span>
                </div>
            </div>
            <div class="restaurant-card">
                <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=500" alt="BBQ Town restaurant">
                <div class="card-content">
                    <h3>BBQ Town</h3>
                    <p>BBQ</p>
                    <span>⭐ 4.9 • 30 min</span>
                </div>
            </div>
            <div class="restaurant-card">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=500" alt="Karachi Biryani restaurant">
                <div class="card-content">
                    <h3>Karachi Biryani</h3>
                    <p>Biryani</p>
                    <span>⭐ 4.8 • 18 min</span>
                </div>
            </div>
            <div class="restaurant-card">
                <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?w=500" alt="Sushi House restaurant">
                <div class="card-content">
                    <h3>Sushi House</h3>
                    <p>Japanese</p>
                    <span>⭐ 4.6 • 35 min</span>
                </div>
            </div>
            <div class="restaurant-card">
                <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=500" alt="Food Street restaurant">
                <div class="card-content">
                    <h3>Food Street</h3>
                    <p>Snacks</p>
                    <span>⭐ 4.9 • 22 min</span>
                </div>
            </div>
        </div>
    </section>

    <section class="offers-hero">
        <div class="hero-overlay">
            <h1>Offers & Deals</h1>
            <p>Enjoy exclusive discounts, free delivery and exciting food offers from your favorite restaurants.</p>
            <a href="{{ route('offers') }}" class="offer-btn">Explore Deals</a>
        </div>
    </section>

    <section class="offers-grid">
        <div class="offer-card">
            <div class="discount-tag">50% OFF</div>
            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600" alt="Pizza deal">
            <div class="offer-content">
                <h3>Pizza Point</h3>
                <p>Get 50% off on all large pizzas</p>
                <span>Valid till 31 May</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">FREE DELIVERY</div>
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600" alt="Burger deal">
            <div class="offer-content">
                <h3>Burger Hub</h3>
                <p>Free delivery on orders above Rs.999</p>
                <span>Limited Time</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">30% OFF</div>
            <img src="{{ asset('images/offer-placeholder.svg') }}" alt="Biryani deal">
            <div class="offer-content">
                <h3>Biryani House</h3>
                <p>Enjoy delicious biryani deals</p>
                <span>Today Only</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">BUY 1 GET 1</div>
            <img src="https://images.unsplash.com/photo-1529193591184-b1d58069ecdd?w=600" alt="BBQ deal">
            <div class="offer-content">
                <h3>BBQ Grill</h3>
                <p>Buy 1 BBQ platter get 1 free</p>
                <span>Weekend Deal</span>
            </div>
        </div>
    </section>
@endsection