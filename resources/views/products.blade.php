
@extends('layouts.app')

@section('title', 'Our Products | ShizuKafe.brew')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@section('content')

<section class="products-page">

    <div class="products-heading">
        <p class="products-subtitle">FRESHLY BREWED FOR YOU</p>
        <h1>Our <span>Products</span></h1>
        <p>Discover your favorite coffee and refreshing drinks.</p>
    </div>

    
    

    <!-- PRODUCTS -->
    <div class="product-catalog" id="productCatalog">

        <!-- ORIGINAL HOMEPAGE PRODUCTS -->

        <div class="catalog-card" data-name="americano" data-category="coffee">
            <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Americano">
            <div class="catalog-info">
                <h3>Americano</h3>
                <p>A coffee drink typically made from equal parts espresso and water.</p>
                <div class="catalog-bottom">
                    <span>★★★★★ <small>(4.9)</small></span>
                    <span class="product-price">₱89</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="black coffee" data-category="coffee">
            <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600" alt="Black Coffee">
            <div class="catalog-info">
                <h3>Black Coffee</h3>
                <p>Freshly brewed coffee made from carefully selected coffee beans.</p>
                <div class="catalog-bottom">
                    <span>★★★★★ <small>(4.9)</small></span>
                    <span class="product-price">₱79</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="mocha" data-category="coffee">
            <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600" alt="Mocha">
            <div class="catalog-info">
                <h3>Mocha</h3>
                <p>A coffee drink known for its chocolate sweetness and rich flavor.</p>
                <div class="catalog-bottom">
                    <span>★★★★★ <small>(4.9)</small></span>
                    <span class="product-price">₱99</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="breve" data-category="coffee">
            <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600" alt="Breve">
            <div class="catalog-info">
                <h3>Breve</h3>
                <p>A coffee drink made with espresso and steamed half-and-half.</p>
                <div class="catalog-bottom">
                    <span>★★★★★ <small>(4.9)</small></span>
                    <span class="product-price">₱99</span>
                </div>
            </div>
        </div>

        <!-- DON MACCHIATOS PRODUCTS -->

        <div class="catalog-card" data-name="iced caramel macchiato" data-category="coffee">
            <img src="{{ asset('images/products/iced-caramel-macchiato.png') }}" alt="Iced Caramel Macchiato">
            <div class="catalog-info">
                <h3>Iced Caramel Macchiato</h3>
                <p>A creamy iced coffee with milk, espresso, and caramel flavor.</p>
                <div class="catalog-bottom">
                    <span>★★★★★</span>
                    <span class="product-price">₱89</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="don matchatos" data-category="matcha">
            <img src="{{ asset('images/products/don-matchatos.png') }}" alt="Don Matchatos">
            <div class="catalog-info">
                <h3>Don Matchatos</h3>
                <p>A refreshing layered drink featuring creamy milk and matcha.</p>
                <div class="catalog-bottom">
                    <span>★★★★★</span>
                    <span class="product-price">₱89</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="donya berry" data-category="berry">
            <img src="{{ asset('images/products/donya-berry.png') }}" alt="Donya Berry">
            <div class="catalog-info">
                <h3>Donya Berry</h3>
                <p>A refreshing berry drink with a sweet and fruity flavor.</p>
                <div class="catalog-bottom">
                    <span>★★★★★</span>
                    <span class="product-price">₱89</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="don darko" data-category="special">
            <img src="{{ asset('images/products/don-darko.png') }}" alt="Don Darko">
            <div class="catalog-info">
                <h3>Don Darko</h3>
                <p>A rich, creamy iced drink with a deep coffee-inspired flavor.</p>
                <div class="catalog-bottom">
                    <span>★★★★★</span>
                    <span class="product-price">₱89</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="matcha berry" data-category="matcha berry">
            <img src="{{ asset('images/products/matcha-berry.png') }}" alt="Matcha Berry">
            <div class="catalog-info">
                <h3>Matcha Berry</h3>
                <p>A colorful combination of refreshing matcha and sweet berry flavor.</p>
                <div class="catalog-bottom">
                    <span>★★★★★</span>
                    <span class="product-price">₱99</span>
                </div>
            </div>
        </div>

        <div class="catalog-card" data-name="black forest" data-category="special berry">
            <img src="{{ asset('images/products/black-forest.png') }}" alt="Black Forest">
            <div class="catalog-info">
                <h3>Black Forest</h3>
                <p>A rich chocolate-inspired drink with creamy and fruity layers.</p>
                <div class="catalog-bottom">
                    <span>★★★★★</span>
                    <span class="product-price">₱99</span>
                </div>
            </div>
        </div>

    </div>

    <p id="noProducts" class="no-products" hidden>
        No products found. Try another search.
    </p>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/products.js') }}"></script>
@endpush
