
@extends('layouts.app')

@section('title', 'About Us | ShizuKafe.brew')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<!-- ABOUT HERO -->
<section class="about-hero">

    <div class="about-hero-content">
        <p class="about-subtitle">GET TO KNOW US</p>

        <h1>About <span>ShizuKafe.brew</span></h1>

        <p>
            More than just coffee, we bring you a warm and enjoyable
            coffee experience. Discover your favorite drinks and enjoy
            every sip with ShizuKafe.brew.
        </p>

    </div>

    <div class="about-hero-image">
        <img
            src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?w=900"
            alt="Coffee shop interior">
    </div>

</section>


<!-- OUR STORY -->
<section class="about-story">

    <div class="about-story-image">
        <img
            src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=900"
            alt="Freshly prepared coffee">
    </div>

    <div class="about-story-content">

        <p class="about-subtitle">OUR STORY</p>

        <h2>Every Cup Has a <span>Story</span></h2>

        <p>
            ShizuKafe.brew is a coffee-focused café concept dedicated
            to bringing enjoyable coffee and refreshing drinks to
            customers in Butuan City.
        </p>

        <p id="extraStory" class="extra-story" hidden>
            From classic coffee favorites to special flavored drinks,
            our menu offers different choices for people who love
            discovering new coffee experiences. We aim to make every
            visit enjoyable through delicious drinks and a welcoming
            atmosphere.
        </p>

        <button id="readMoreBtn" class="read-more-btn">
            Read More +
        </button>

    </div>

</section>


<!-- MISSION AND VISION -->
<section class="about-values">

    <div class="values-heading">
        <p class="about-subtitle">WHAT WE BELIEVE IN</p>
        <h2>Our Mission & Vision</h2>
    </div>

    <div class="values-container">

        <div class="value-card">
            <div class="value-icon">☕</div>

            <h3>Our Mission</h3>

            <p>
                To provide enjoyable coffee and refreshing drinks
                while creating a welcoming experience for every
                customer.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon">✦</div>

            <h3>Our Vision</h3>

            <p>
                To become a recognized café choice in Butuan City,
                known for enjoyable drinks, quality service, and
                memorable coffee experiences.
            </p>
        </div>

    </div>

</section>


<!-- LOCATION -->
<section class="about-location">

    <div class="location-content">

        <p class="about-subtitle">FIND US</p>

        <h2>Visit <span>ShizuKafe.brew</span></h2>

        <p>
            Looking for your next favorite coffee?
            Visit us in Butuan City and discover
            our selection of coffee and refreshing drinks.
        </p>

        <div class="location-details">

            <div class="location-item">
                <span>📍</span>

                <div>
                    <h3>Our Location</h3>
                    <p>Butuan City, Philippines</p>
                </div>
            </div>

            <div class="location-item">
                <span>☕</span>

                <div>
                    <h3>Our Specialty</h3>
                    <p>Coffee and refreshing specialty drinks</p>
                </div>
            </div>

        </div>

        <a href="/products" class="about-btn">
            View Our Menu ↗
        </a>

    </div>

    <div class="location-image">
        <img
            src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=900"
            alt="Cozy coffee shop">
    </div>

</section>

@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush
