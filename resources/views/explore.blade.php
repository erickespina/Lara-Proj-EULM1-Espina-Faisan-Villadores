@extends('layouts.app')

@section('title', 'Explore | ShizuKafe.brew')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endpush

@section('content')
<section class="explore-hero">
    <p class="subtitle">DISCOVER</p>
    <h1>Explore <span>ShizuKafe</span></h1>
    <p class="explore-description">Find your perfect drink, meet today's pick, and learn a little about coffee.</p>
</section>

<!-- 1. FIND YOUR DRINK -->
<section class="explore-section">
    <h2>Find Your <span>Drink</span></h2>

    <div class="finder-box">
        <p class="q-label">1. What flavor are you in the mood for?</p>
        <div class="option-row" data-question="flavor">
            <button type="button" class="option-btn" data-value="strong">Strong &amp; bold</button>
            <button type="button" class="option-btn" data-value="sweet">Sweet &amp; creamy</button>
            <button type="button" class="option-btn" data-value="fruity">Fruity</button>
            <button type="button" class="option-btn" data-value="matcha">Matcha</button>
        </div>

        <p class="q-label">2. What's your budget?</p>
        <div class="option-row" data-question="budget">
            <button type="button" class="option-btn" data-value="89">Up to ₱89</button>
            <button type="button" class="option-btn" data-value="99">Up to ₱99</button>
        </div>

        <button type="button" id="findBtn" class="primary-btn">Find my drink</button>
        <p id="finderError" class="finder-error" hidden>Please answer both questions first.</p>
    </div>

    <div class="drink-result" id="finderResult" hidden>
        <img class="dr-img" src="" alt="">
        <div class="dr-text">
            <span class="tag dr-tag"></span>
            <h3 class="dr-name"></h3>
            <p class="dr-desc"></p>
            <span class="price dr-price"></span>
        </div>
    </div>
</section>

<!-- 2. DRINK OF THE DAY -->
<section class="explore-section">
    <h2>Drink of the <span>Day</span></h2>

    <div class="drink-result" id="dayResult">
        <img class="dr-img" src="" alt="">
        <div class="dr-text">
            <span class="tag dr-tag"></span>
            <h3 class="dr-name"></h3>
            <p class="dr-desc"></p>
            <span class="price dr-price"></span>
        </div>
    </div>

    <div class="center-row">
        <button type="button" id="surpriseBtn" class="secondary-btn">Surprise me 🎲</button>
    </div>
</section>

<!-- 3. COFFEE GUIDE -->
<section class="explore-section">
    <h2>Coffee <span>Guide</span></h2>

    <div class="guide">
        <div class="guide-item">
            <button type="button" class="guide-q" aria-expanded="false">Espresso vs. brewed coffee</button>
            <div class="guide-a" hidden>
                Espresso is made by forcing hot water through finely ground coffee under pressure, which gives a small, concentrated shot. Brewed coffee lets water pass through coarser grounds more slowly, giving a larger and milder cup.
            </div>
        </div>

        <div class="guide-item">
            <button type="button" class="guide-q" aria-expanded="false">What's an Americano? What's a Breve?</button>
            <div class="guide-a" hidden>
                An Americano is espresso with hot water, so it tastes bold but lighter than a straight shot. A Breve is espresso with steamed half-and-half, which makes it richer and creamier than a latte.
            </div>
        </div>

        <div class="guide-item">
            <button type="button" class="guide-q" aria-expanded="false">What is matcha?</button>
            <div class="guide-a" hidden>
                Matcha is finely ground green tea powder that is whisked into a drink. It tastes earthy and a little sweet, and it pairs well with milk or berry flavors.
            </div>
        </div>

        <div class="guide-item">
            <button type="button" class="guide-q" aria-expanded="false">How do I choose a drink?</button>
            <div class="guide-a" hidden>
                Want a strong kick? Try Black Coffee or Americano. Want something sweet and creamy? Go for Mocha or Iced Caramel Macchiato. Prefer something fruity or green? Try Donya Berry or Don Matchatos. Not sure? Use the Find Your Drink quiz above.
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/explore.js') }}"></script>
@endpush