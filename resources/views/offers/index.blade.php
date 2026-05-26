@extends('layouts.app')

@section('content')
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
            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600" alt="Pizza Point deal">
            <div class="offer-content">
                <h3>Pizza Point</h3>
                <p>Get 50% off on all large pizzas</p>
                <span>Valid till 31 May</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">FREE DELIVERY</div>
            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600" alt="Burger Hub deal">
            <div class="offer-content">
                <h3>Burger Hub</h3>
                <p>Free delivery on orders above Rs.999</p>
                <span>Limited Time</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">30% OFF</div>
            <img src="{{ asset('images/offer-placeholder.svg') }}" alt="Biryani House deal">
            <div class="offer-content">
                <h3>Biryani House</h3>
                <p>Enjoy delicious biryani deals</p>
                <span>Today Only</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">BUY 1 GET 1</div>
            <img src="https://images.unsplash.com/photo-1529193591184-b1d58069ecdd?w=600" alt="BBQ Grill deal">
            <div class="offer-content">
                <h3>BBQ Grill</h3>
                <p>Buy 1 BBQ platter get 1 free</p>
                <span>Weekend Deal</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">40% OFF</div>
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600" alt="Chicken Broast deal">
            <div class="offer-content">
                <h3>Chicken Broast</h3>
                <p>Get 40% off on crispy chicken meals</p>
                <span>Today Special</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">FREE DELIVERY</div>
            <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?w=600" alt="Sushi Zen deal">
            <div class="offer-content">
                <h3>Sushi Zen</h3>
                <p>Buy 1 Get 1 Free on Sushi Roll</p>
                <span>Limited Offer</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">25% OFF</div>
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="Italian Pizza deal">
            <div class="offer-content">
                <h3>Italian Pizza</h3>
                <p>Enjoy special pizza discounts today</p>
                <span>Weekend Deal</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">BUY 2 GET 1</div>
            <img src="{{ asset('images/offer-placeholder.svg') }}" alt="Spicy Bites deal">
            <div class="offer-content">
                <h3>Spicy Bites</h3>
                <p>Buy 2 and get 1 free</p>
                <span>Ending Soon</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">60% OFF</div>
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=600" alt="Healthy Bowl deal">
            <div class="offer-content">
                <h3>Healthy Bowl</h3>
                <p>Get special healthy meal discounts</p>
                <span>Today Only</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">FREE DELIVERY</div>
            <img src="https://images.unsplash.com/photo-1561758033-d89a9ad46330?w=600" alt="Hot Wings deal">
            <div class="offer-content">
                <h3>Hot Wings</h3>
                <p>Free delivery on wings combos</p>
                <span>Limited Time</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">35% OFF</div>
            <img src="{{ asset('images/offer-placeholder.svg') }}" alt="Chinese Restaurant deal">
            <div class="offer-content">
                <h3>Chinese Restaurant</h3>
                <p>Special burger festival offer</p>
                <span>Weekend Deal</span>
            </div>
        </div>

        <div class="offer-card">
            <div class="discount-tag">BUY 1 GET 1</div>
            <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=600" alt="Ice Cream House deal">
            <div class="offer-content">
                <h3>Ice Cream House</h3>
                <p>Buy one dessert and get one free</p>
                <span>Ending Soon</span>
            </div>
        </div>
    </section>
@endsection