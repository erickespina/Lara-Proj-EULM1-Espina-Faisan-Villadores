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
        <div class="menu-section"><div class="section-heading"><div><p class="eyebrow">PICK YOUR PERFECT CUP</p><h2>Our coffee menu<span>.</span></h2></div><span class="menu-count">6 house favorites</span></div>
            <p class="menu-description">Select a size and temperature, then add your coffee to the order.</p>
            <div class="coffee-search-feedback"><p id="coffee-search-status" role="status" aria-live="polite" aria-atomic="true">6 coffees to explore. Use the search bar above to find a favorite.</p><button id="coffee-search-clear" type="button" hidden>Clear search</button></div>
            <noscript><p class="notice">Please enable JavaScript to customize coffees and build your order.</p></noscript>
            <div class="coffee-grid">
                @foreach ([
                    ['name' => 'Americano', 'price' => 95, 'description' => 'Rich espresso, hot water, and a beautifully bold finish.', 'style' => 'americano', 'tag' => 'THE CLASSIC'],
                    ['name' => 'Caffè Latte', 'price' => 120, 'description' => 'Smooth espresso softened with silky, creamy milk.', 'style' => 'latte', 'tag' => 'CROWD FAVORITE'],
                    ['name' => 'Cappuccino', 'price' => 125, 'description' => 'A balanced espresso with steamed milk and airy foam.', 'style' => 'cappuccino', 'tag' => 'LIGHT & FOAMY'],
                    ['name' => 'Caramel Macchiato', 'price' => 145, 'description' => 'Vanilla milk, espresso, and a sweet caramel drizzle.', 'style' => 'caramel', 'tag' => 'SWEET ESCAPE'],
                    ['name' => 'Caffè Mocha', 'price' => 140, 'description' => 'Chocolate meets espresso for a comforting little treat.', 'style' => 'mocha', 'tag' => 'CHOCOLATE NOTES'],
                    ['name' => 'Spanish Latte', 'price' => 135, 'description' => 'Our espresso with milk and a touch of condensed sweetness.', 'style' => 'spanish', 'tag' => 'EXTRA CREAMY'],
                ] as $coffee)
                    <article class="coffee-card" data-name="{{ $coffee['name'] }}" data-price="{{ $coffee['price'] }}">
                        <div class="drink-art {{ $coffee['style'] }}" aria-hidden="true"><span class="drink-label">{{ $coffee['tag'] }}</span><div class="mini-saucer"></div><div class="mini-cup"><div class="mini-coffee">✳</div></div><span class="art-word">shizu.</span></div>
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
