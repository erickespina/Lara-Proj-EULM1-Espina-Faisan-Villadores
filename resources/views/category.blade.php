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
    <button class="filter-btn" data-filter="coffee" type="button">Coffee</button>
    <button class="filter-btn" data-filter="matcha" type="button">Matcha</button>
    <button class="filter-btn" data-filter="berry" type="button">Berry</button>
    <button class="filter-btn" data-filter="special" type="button">Special</button>
</section>

<section class="category-grid" id="categoryGrid">

    <div class="product-card" data-category="coffee">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Americano">
        <h3>Americano</h3>
        <p>A coffee drink typically made from equal parts espresso and water.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <strong class="price-tag">₱89</strong>
        </div>
    </div>

    <div class="product-card" data-category="coffee">
        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600" alt="Black Coffee">
        <h3>Black Coffee</h3>
        <p>Freshly brewed coffee made from carefully selected coffee beans.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <strong class="price-tag">₱79</strong>
        </div>
    </div>

    <div class="product-card" data-category="coffee">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Mocha">
        <h3>Mocha</h3>
        <p>A coffee drink known for its chocolate sweetness and rich flavor.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <strong class="price-tag">₱99</strong>
        </div>
    </div>

    <div class="product-card" data-category="coffee">
        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600" alt="Breve">
        <h3>Breve</h3>
        <p>A coffee drink made with espresso and steamed half-and-half.</p>
        <div class="product-bottom">
            <span>★★★★★ <small>(4.9)</small></span>
            <strong class="price-tag">₱99</strong>
        </div>
    </div>

    <div class="product-card" data-category="coffee">
        <img src="{{ asset('images/products/iced-caramel-macchiato.png') }}" alt="Iced Caramel Macchiato"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600'">
        <h3>Iced Caramel Macchiato</h3>
        <p>A creamy iced coffee with milk, espresso, and caramel flavor.</p>
        <div class="product-bottom">
            <span>★★★★★</span>
            <strong class="price-tag">₱89</strong>
        </div>
    </div>

    <div class="product-card" data-category="matcha">
        <img src="{{ asset('images/products/don-matchatos.png') }}" alt="Don Matchatos"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600'">
        <h3>Don Matchatos</h3>
        <p>A refreshing layered drink featuring creamy milk and matcha.</p>
        <div class="product-bottom">
            <span>★★★★★</span>
            <strong class="price-tag">₱89</strong>
        </div>
    </div>

    <div class="product-card" data-category="berry">
        <img src="{{ asset('images/products/donya-berry.png') }}" alt="Donya Berry"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600'">
        <h3>Donya Berry</h3>
        <p>A refreshing berry drink with a sweet and fruity flavor.</p>
        <div class="product-bottom">
            <span>★★★★★</span>
            <strong class="price-tag">₱89</strong>
        </div>
    </div>

    <div class="product-card" data-category="special">
        <img src="{{ asset('images/products/don-darko.png') }}" alt="Don Darko"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600'">
        <h3>Don Darko</h3>
        <p>A rich, creamy iced drink with a deep coffee-inspired flavor.</p>
        <div class="product-bottom">
            <span>★★★★★</span>
            <strong class="price-tag">₱89</strong>
        </div>
    </div>

    <div class="product-card" data-category="matcha berry">
        <img src="{{ asset('images/products/matcha-berry.png') }}" alt="Matcha Berry"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600'">
        <h3>Matcha Berry</h3>
        <p>A colorful combination of refreshing matcha and sweet berry flavor.</p>
        <div class="product-bottom">
            <span>★★★★★</span>
            <strong class="price-tag">₱99</strong>
        </div>
    </div>

    <div class="product-card" data-category="special berry">
        <img src="{{ asset('images/products/black-forest.png') }}" alt="Black Forest"
             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600'">
        <h3>Black Forest</h3>
        <p>A rich chocolate-inspired drink with creamy and fruity layers.</p>
        <div class="product-bottom">
            <span>★★★★★</span>
            <strong class="price-tag">₱99</strong>
        </div>
    </div>

</section>

<p class="no-results" id="noResults">No items in this category yet.</p>
@endsection

@push('scripts')
    <script src="{{ asset('js/category.js') }}"></script>
@endpush