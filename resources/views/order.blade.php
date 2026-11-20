@extends('layouts.app')

@section('title', 'Order Coffee | ShizuKafe')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endpush

@section('content')
    <div class="order-page">
    <section class="order-hero">
        <div><p class="eyebrow">FRESHLY BREWED, JUST FOR YOU</p><h1>Your daily pause,<br><em>made to order.</em></h1><p class="hero-description">Find your favorite cup, make it yours, and take a moment to slow down.</p><a class="hero-link" href="#coffee-menu">Explore the menu <span>↓</span></a></div>
        <div class="hero-art" aria-hidden="true"><span class="orbit orbit-one"></span><span class="orbit orbit-two"></span><span class="hero-bean bean-one">◒</span><span class="hero-bean bean-two">◒</span><div class="hero-saucer"></div><div class="hero-cup"><div class="coffee-surface"><span>✳</span></div></div><span class="art-caption">BREWED WITH A LITTLE EXTRA CARE</span></div>
        <div class="hero-note"><span>01 / THE COFFEE MENU</span><span>Something warm. Something wonderful.</span></div>
    </section>

    <section class="order-area" id="coffee-menu">
        <div class="menu-section"><div class="section-heading"><div><p class="eyebrow">PICK YOUR PERFECT CUP</p><h2>Our drinks menu<span>.</span></h2></div><span class="menu-count">10 menu favorites</span></div>
            <p class="menu-description">Select a size and temperature, then add your drink to the order.</p>
            <div class="coffee-search-feedback"><p id="coffee-search-status" role="status" aria-live="polite" aria-atomic="true">10 drinks to explore. Use the search bar above to find a favorite.</p><button id="coffee-search-clear" type="button" hidden>Clear search</button></div>
            <noscript><p class="notice">Please enable JavaScript to customize coffees and build your order.</p></noscript>
            <div class="coffee-grid">
                @foreach ([
                    ['name' => 'Americano', 'price' => 89, 'description' => 'A coffee drink typically made from equal parts espresso and water.', 'style' => 'menu-photo', 'tag' => 'COFFEE', 'image' => 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600'],
                    ['name' => 'Black Coffee', 'price' => 79, 'description' => 'Freshly brewed coffee made from carefully selected coffee beans.', 'style' => 'menu-photo', 'tag' => 'COFFEE', 'image' => 'https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=600'],
                    ['name' => 'Mocha', 'price' => 99, 'description' => 'A coffee drink known for its chocolate sweetness and rich flavor.', 'style' => 'menu-photo', 'tag' => 'COFFEE', 'image' => 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600'],
                    ['name' => 'Breve', 'price' => 99, 'description' => 'A coffee drink made with espresso and steamed half-and-half.', 'style' => 'menu-photo', 'tag' => 'COFFEE', 'image' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600'],
                    ['name' => 'Iced Caramel Macchiato', 'price' => 89, 'description' => 'A creamy iced coffee with milk, espresso, and caramel flavor.', 'style' => 'menu-photo', 'tag' => 'COFFEE', 'image' => 'images/products/iced-caramel-macchiato.png'],
                    ['name' => 'Don Matchatos', 'price' => 89, 'description' => 'A refreshing layered drink featuring creamy milk and matcha.', 'style' => 'menu-photo', 'tag' => 'MATCHA', 'image' => 'images/products/don-matchatos.png'],
                    ['name' => 'Donya Berry', 'price' => 89, 'description' => 'A refreshing berry drink with a sweet and fruity flavor.', 'style' => 'menu-photo', 'tag' => 'BERRY', 'image' => 'images/products/donya-berry.png'],
                    ['name' => 'Don Darko', 'price' => 89, 'description' => 'A rich, creamy iced drink with a deep coffee-inspired flavor.', 'style' => 'menu-photo', 'tag' => 'SPECIAL', 'image' => 'images/products/don-darko.png'],
                    ['name' => 'Matcha Berry', 'price' => 99, 'description' => 'A colorful combination of refreshing matcha and sweet berry flavor.', 'style' => 'menu-photo', 'tag' => 'MATCHA / BERRY', 'image' => 'images/products/matcha-berry.png'],
                    ['name' => 'Black Forest', 'price' => 99, 'description' => 'A rich chocolate-inspired drink with creamy and fruity layers.', 'style' => 'menu-photo', 'tag' => 'SPECIAL / BERRY', 'image' => 'images/products/black-forest.png'],
                ] as $coffee)
                    <article class="coffee-card" data-name="{{ $coffee['name'] }}" data-price="{{ $coffee['price'] }}">
                        <div class="drink-art {{ $coffee['style'] }}"><img class="order-coffee-photo" src="{{ str_starts_with($coffee['image'], 'https://') ? $coffee['image'] : asset($coffee['image']) }}" alt="{{ $coffee['name'] }}" loading="lazy"><span class="drink-label">{{ $coffee['tag'] }}</span></div>
                        <div class="card-content"><div class="card-title"><h3>{{ $coffee['name'] }}</h3><span class="coffee-price">₱{{ $coffee['price'] }}</span></div><p>{{ $coffee['description'] }}</p>
                            <div class="options"><label>Size<select class="size-select" aria-label="{{ $coffee['name'] }} size"><option value="0">Regular · 12 oz</option><option value="25">Large · 16 oz (+₱25)</option></select></label><label>Temperature<select class="temperature-select" aria-label="{{ $coffee['name'] }} temperature"><option>Hot</option><option>Iced</option></select></label></div>
                            <button class="add-button" type="button">Add to order <span>+</span></button>
                        </div>
                    </article>
                @endforeach
            </div>
            <div id="coffee-search-empty" hidden><h3>No coffees found.</h3><p>Try a coffee name or ingredient, such as latte, caramel, or chocolate.</p></div>
        </div>
        <aside class="order-panel" aria-label="Your order"><div class="panel-top"><span class="eyebrow">A LITTLE SOMETHING FOR YOU</span><h2>Your order <span id="item-count">0</span></h2></div><div id="order-items"><div class="empty-order"><span aria-hidden="true">☕</span><h3>Your cup is waiting.</h3><p>Add a coffee from the menu<br>to start your order.</p></div></div><div class="order-totals"><div><span>Subtotal</span><strong id="subtotal">₱0.00</strong></div><p>Listed prices are final. No additional fees.</p><div class="total-line"><span>Total</span><strong id="total">₱0.00</strong></div></div><button id="place-order" class="checkout-button" type="button" disabled>Place order <span>↗</span></button><p class="demo-note">Demo ordering only · No payment collected</p><p id="order-status" class="order-status" role="status" aria-live="polite"></p></aside>
    </section>
    <dialog id="confirmation"><div class="confirmation-mark" aria-hidden="true">✓</div><p class="eyebrow">A LITTLE MOMENT OF JOY</p><h2>Your demo order is ready!</h2><p>Here’s a recap of your coffee selection.</p><ul id="confirmation-items"></ul><p class="confirmation-total">Total <strong id="confirmation-total"></strong></p><p class="demo-note">This is a demonstration. Nothing has been sent to a café and no payment has been taken.</p><button id="close-confirmation" class="checkout-button" type="button">Back to the menu</button></dialog>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/order.js') }}" defer></script>
    <script src="{{ asset('js/search.js') }}" defer></script>
@endpush
