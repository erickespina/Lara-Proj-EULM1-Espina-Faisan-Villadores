@extends('layouts.app')

@section('title', 'Explore | ShizuKafe.brew')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endpush

@section('content')
<section class="explore-hero">
    <p class="subtitle">DISCOVER</p>
    <h1>Explore Our <span>Coffee</span></h1>
    <p class="explore-description">Tap a drink to see what makes it special.</p>
</section>

<section class="explore-list">

    <article class="feature">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=900" alt="Americano">
        <div class="feature-text">
            <span class="tag">Hot · Espresso</span>
            <h2>Americano</h2>
            <p>A coffee drink typically made from equal parts espresso and water. Clean, bold, and easy to sip.</p>
            <p class="best-for">Best for: a quick, strong pick-me-up.</p>
            <div class="feature-bottom">
                <span class="price">₱89</span>
                <button type="button" class="details-btn"
                    data-title="Americano"
                    data-img="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=900"
                    data-desc="A coffee drink typically made from equal parts espresso and water. Clean, bold, and easy to sip."
                    data-notes="Best enjoyed hot, any time of day.">
                    Details
                </button>
            </div>
        </div>
    </article>

    <article class="feature reverse">
        <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=900" alt="Black Coffee">
        <div class="feature-text">
            <span class="tag">Hot · Brewed</span>
            <h2>Black Coffee</h2>
            <p>Freshly brewed coffee made from carefully selected coffee beans, with nothing added.</p>
            <p class="best-for">Best for: a strong morning start.</p>
            <div class="feature-bottom">
                <span class="price">₱79</span>
                <button type="button" class="details-btn"
                    data-title="Black Coffee"
                    data-img="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=900"
                    data-desc="A hot coffee beverage made from freshly brewed coffee beans, served without milk or sugar."
                    data-notes="Great for a strong morning start.">
                    Details
                </button>
            </div>
        </div>
    </article>

    <article class="feature">
        <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=900" alt="Mocha">
        <div class="feature-text">
            <span class="tag">Hot · Chocolate</span>
            <h2>Mocha</h2>
            <p>A coffee drink known for its chocolate sweetness and rich flavor.</p>
            <p class="best-for">Best for: anyone with a sweet tooth.</p>
            <div class="feature-bottom">
                <span class="price">₱99</span>
                <button type="button" class="details-btn"
                    data-title="Mocha"
                    data-img="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=900"
                    data-desc="A coffee drink known for its chocolate sweetness and rich flavor."
                    data-notes="A treat for anyone with a sweet tooth.">
                    Details
                </button>
            </div>
        </div>
    </article>

    <article class="feature reverse">
        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=900" alt="Breve">
        <div class="feature-text">
            <span class="tag">Hot · Creamy</span>
            <h2>Breve</h2>
            <p>A coffee drink made with espresso and steamed half-and-half, creamier than a latte.</p>
            <p class="best-for">Best for: a rich, smooth afternoon cup.</p>
            <div class="feature-bottom">
                <span class="price">₱99</span>
                <button type="button" class="details-btn"
                    data-title="Breve"
                    data-img="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=900"
                    data-desc="A coffee drink made with espresso and steamed half-and-half, creamier than a latte."
                    data-notes="Rich and smooth.">
                    Details
                </button>
            </div>
        </div>
    </article>

</section>

<div class="modal" id="drinkModal" aria-hidden="true">
    <div class="modal-box">
        <button type="button" class="modal-close" id="modalClose" aria-label="Close">&times;</button>
        <img id="modalImg" src="" alt="">
        <h2 id="modalTitle"></h2>
        <p id="modalDesc"></p>
        <p class="modal-notes" id="modalNotes"></p>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/explore.js') }}"></script>
@endpush