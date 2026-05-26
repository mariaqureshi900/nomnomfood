@extends('layouts.app')

@section('content')
    <section class="categories-page">
        <h2>All Food Categories</h2>

        <div class="categories-grid">
            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-italian.svg') }}" alt="Italian food">
                </div>
                <p>Italian</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-chinese.svg') }}" alt="Chinese food">
                </div>
                <p>Chinese</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-pizza.svg') }}" alt="Pizza">
                </div>
                <p>Pizza</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-burger.svg') }}" alt="Burger">
                </div>
                <p>Burger</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-fastfood.svg') }}" alt="Fast Food">
                </div>
                <p>Fast Food</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-healthy.svg') }}" alt="Healthy">
                </div>
                <p>Healthy</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-dessert.svg') }}" alt="Desserts">
                </div>
                <p>Desserts</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-pakistani.svg') }}" alt="Pakistani">
                </div>
                <p>Pakistani</p>
            </div>

            <div class="category-item-card">
                <div class="img-container">
                    <img src="{{ asset('images/category-seafood.svg') }}" alt="Seafood">
                </div>
                <p>Seafood</p>
            </div>
        </div>
    </section>
@endsection