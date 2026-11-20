
@extends('layouts.app')

@section('title', 'Home | ShizuKafe.brew')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section class="hero">

    <div class="hero-content">

        <p class="subtitle">WELCOME TO SHIZUKAFE.BREW</p>

        <h1>
            Enjoy The Most<br>
            <span>Delicious Coffee</span>
        </h1>

        <p class="hero-description">
            Start Your Day With Coffee, Enhancing Productivity And Mood.
            Its Invigorating Aroma Sets A Focused Tone For Tackling Tasks
            With Renewed Energy And Positivity.
        </p>

        <div class="hero-buttons">
            <a href="#products" class="primary-btn">Explore ↗</a>
            <a href="/contact" class="secondary-btn">Order Coffee ☕</a>
        </div>

    </div>

    <div class="hero-image home-carousel" role="region" aria-roledescription="carousel" aria-label="Featured drinks">
        <div class="home-slide" role="group" aria-roledescription="slide" aria-label="1 of 3">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=900" alt="Freshly brewed coffee" fetchpriority="high">
        </div>
        <div class="home-slide" role="group" aria-roledescription="slide" aria-label="2 of 3" hidden>
            <img src="{{ asset('images/products/iced-caramel-macchiato.png') }}" alt="Iced caramel macchiato" loading="lazy">
        </div>
        <div class="home-slide" role="group" aria-roledescription="slide" aria-label="3 of 3" hidden>
            <img src="{{ asset('images/products/don-matchatos.png') }}" alt="Don Matchatos matcha drink" loading="lazy">
        </div>
        <div class="rating-card">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <small>4.9 out of 5 overall star<br>rating for our local cafe</small>
        </div>
        <div class="home-carousel-controls" hidden>
            <button type="button" data-direction="-1" aria-label="Previous drink">&#8592;</button>
            <div class="home-carousel-dots" aria-label="Choose a featured drink">
                <button type="button" data-slide="0" aria-label="Show drink 1" aria-current="true"></button>
                <button type="button" data-slide="1" aria-label="Show drink 2"></button>
                <button type="button" data-slide="2" aria-label="Show drink 3"></button>
            </div>
            <button type="button" data-direction="1" aria-label="Next drink">&#8594;</button>
            <button type="button" class="home-carousel-pause">Pause</button>
        </div>
        <p class="home-carousel-status" aria-live="polite" aria-atomic="true"></p>
    </div>

</section>

<section class="products-section" id="products">

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Americano">
        <h3>Americano</h3>
        <p>A coffee drink typically made from equal parts espresso and water.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600" alt="Black Coffee">
        <h3>Black Coffee</h3>
        <p>Black coffee is a hot coffee beverage made from freshly brewed coffee beans.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Mocha">
        <h3>Mocha</h3>
        <p>A coffee drink known for its chocolate sweetness and rich flavor.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600" alt="Breve">
        <h3>Breve</h3>
        <p>Breve is a coffee drink made with espresso and steamed half-and-half.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
