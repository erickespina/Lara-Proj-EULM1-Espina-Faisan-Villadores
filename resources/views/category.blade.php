@extends('layouts.app')

@section('title', 'Category | ShizuKafe.brew')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endpush

@section('content')
<section class="category-hero">
    <p class="subtitle">BROWSE BY TYPE</p>
    <h1>Our <span>Categories</span></h1>
    <p class="category-description">Pick a category and find your next favorite cup.</p>
</section>

<section class="category-filters">
    <button class="filter-btn active" data-filter="all" type="button">All</button>
    <button class="filter-btn" data-filter="black" type="button">Black Coffee</button>
    <button class="filter-btn" data-filter="milk" type="button">Milk-Based</button>
</section>

<section class="category-grid" id="categoryGrid">

    <div class="product-card" data-category="black">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Americano">
        <h3>Americano</h3>
        <p>A coffee drink typically made from equal parts espresso and water.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

    <div class="product-card" data-category="black">
        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600" alt="Black Coffee">
        <h3>Black Coffee</h3>
        <p>Black coffee is a hot coffee beverage made from freshly brewed coffee beans.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

    <div class="product-card" data-category="milk">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Mocha">
        <h3>Mocha</h3>
        <p>A coffee drink known for its chocolate sweetness and rich flavor.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

    <div class="product-card" data-category="milk">
        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600" alt="Breve">
        <h3>Breve</h3>
        <p>Breve is a coffee drink made with espresso and steamed half-and-half.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <a href="/contact">More</a>
        </div>
    </div>

</section>

<p class="no-results" id="noResults">No items in this category yet.</p>
@endsection

@push('scripts')
    <script src="{{ asset('js/category.js') }}"></script>
@endpush