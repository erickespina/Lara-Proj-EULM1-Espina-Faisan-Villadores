
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


<!-- BUSINESS BACKGROUND -->
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
            to serving enjoyable coffee and refreshing drinks.
            We offer a variety of beverages, from classic coffee
            favorites to special flavored drinks.
        </p>

        <p id="extraStory" class="extra-story" hidden>
            Located in Butuan City, ShizuKafe.brew aims to provide
            customers with a welcoming coffee experience. Whether
            customers prefer strong coffee, creamy drinks, matcha,
            or fruity flavors, there is something to enjoy.
        </p>

        <button type="button" id="readMoreBtn" class="read-more-btn">
            Read More +
        </button>

        <div class="about-location-info">
            <span>📍</span>
            <div>
                <strong>Our Location</strong>
                <p>Butuan City, Philippines</p>
            </div>
        </div>
    </div>
</section>


<!-- MISSION AND VISION -->
<section class="about-values">
    <div class="values-heading">
        <p class="about-subtitle">WHAT WE BELIEVE IN</p>
        <h2>Our Mission & Vision</h2>
        <p>Our commitment to every customer.</p>
    </div>

    <div class="values-container">

        <div class="value-card">
            <div class="value-icon">☕</div>

            <h3>Our Mission</h3>

            <p>
                To provide enjoyable coffee and refreshing drinks
                while creating a welcoming and satisfying experience
                for every customer.
            </p>
        </div>

        <div class="value-card">
            <div class="value-icon">✦</div>

            <h3>Our Vision</h3>

            <p>
                To become a recognized café choice in Butuan City,
                known for enjoyable drinks, quality service,
                and memorable coffee experiences.
            </p>
        </div>

    </div>
</section>


<!-- TEAM SECTION -->
<section class="about-team">
    <div class="team-heading">
        <p class="about-subtitle">THE PEOPLE BEHIND THE COFFEE</p>

        <h2>Meet Our <span>Team</span></h2>

        <p>
            Get to know the people who are part of
            ShizuKafe.brew.
        </p>
    </div>

    <div class="team-container">

        <!-- MEMBER 1 -->
        <div class="team-card">
            <div class="team-image">
                <img
                    src="{{ asset('images/team/member-1.jpg') }}"
                    alt="Team Member 1">
            </div>

            <div class="team-info">
                <span class="team-number">MEMBER 01</span>
                <h3>Member 1</h3>
                <p>Manager</p>
                <p>ShizuKafe.brew Team</p>
            </div>
        </div>


        <!-- MEMBER 2 -->
        <div class="team-card">
            <div class="team-image">
                <img
                    src="{{ asset('images/team/member-2.jpg') }}"
                    alt="Team Member 2">
            </div>

            <div class="team-info">
                <span class="team-number">MEMBER 02</span>
                <h3>Member 2</h3>
                <p>Bartender</p>
                <p>ShizuKafe.brew Team</p>
            </div>
        </div>


        <!-- MEMBER 3 -->
        <div class="team-card">
            <div class="team-image">
                <img
                    src="{{ asset('images/team/member-3.jpg') }}"
                    alt="Team Member 3">
            </div>

            <div class="team-info">
                <span class="team-number">MEMBER 03</span>
                <h3>Member 3</h3>
                <p>Staff</p>
                <p>ShizuKafe.brew Team</p>
            </div>
        </div>

    </div>
</section>


<!-- ABOUT FOOTER CTA -->
<section class="about-contact">
    <p class="about-subtitle">YOUR COFFEE MOMENT STARTS HERE</p>

    <h2>Make Every Sip <span>Special.</span></h2>

    <p>
        Discover your favorite drinks and enjoy the
        ShizuKafe.brew experience.
    </p>

    <a href="/order" class="about-order-btn">
        Order Your Coffee ☕
    </a>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush
