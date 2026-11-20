@extends('layouts.app')

@section('title', 'Contact Us | ShizuKafe.brew')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<div class="contact-page">
    <section class="contact-intro">
        <p class="contact-eyebrow">LET'S TALK OVER COFFEE</p>
        <h1>A good conversation<br>starts with <span>hello.</span></h1>
        <p>Have a question about a cup, a suggestion for our menu, or just something to share? We'd love to hear it.</p>
    </section>
    <section class="contact-grid" aria-label="Contact ShizuKafe">
        <aside class="contact-details">
            <p class="contact-eyebrow">STAY IN TOUCH</p>
            <h2>There's always room<br>for a conversation.</h2>
            <p>Questions, feedback, and coffee ideas are welcome here.</p>
            <div class="contact-detail"><span>01</span><div><h3>Find us</h3><p>Butuan City, Philippines</p></div></div>
            <div class="contact-detail"><span>02</span><div><h3>Email</h3><p>hello@shizukafe.example</p><small>Sample contact for this class project</small></div></div>
            <div class="contact-detail"><span>03</span><div><h3>Looking for your next cup?</h3><a href="{{ route('order') }}#coffee-menu">Explore our coffee menu &rarr;</a></div></div>
            <p class="contact-footnote">ShizuKafe.brew &middot; Enjoy every sip.</p>
        </aside>
        <div class="contact-form-panel">
            <h2>Send us a message<span>.</span></h2>
            <p class="contact-form-intro">All fields are required.</p>
            <noscript><p class="contact-notice">Please enable JavaScript to validate this demo form. Messages are not sent.</p></noscript>
            <form id="contact-form" novalidate>
                <div class="contact-fields-row">
                    <div class="contact-field"><label for="contact-name">Your name</label><input id="contact-name" name="name" type="text" autocomplete="name" maxlength="100" required aria-describedby="contact-name-error" placeholder="Your full name"><p class="contact-error" id="contact-name-error"></p></div>
                    <div class="contact-field"><label for="contact-email">Email address</label><input id="contact-email" name="email" type="email" autocomplete="email" maxlength="254" required aria-describedby="contact-email-error" placeholder="you@example.com"><p class="contact-error" id="contact-email-error"></p></div>
                </div>
                <div class="contact-field"><label for="contact-subject">Subject</label><input id="contact-subject" name="subject" type="text" maxlength="150" required aria-describedby="contact-subject-error" placeholder="What would you like to talk about?"><p class="contact-error" id="contact-subject-error"></p></div>
                <div class="contact-field"><label for="contact-message">Message</label><textarea id="contact-message" name="message" rows="6" maxlength="3000" required aria-describedby="contact-message-error" placeholder="Tell us what's on your mind..."></textarea><p class="contact-error" id="contact-message-error"></p></div>
                <button class="contact-submit" id="contact-submit" type="submit" disabled>Send message <span aria-hidden="true">&rarr;</span></button>
                <p class="contact-demo">Class project demo. This form validates your message locally; it does not send email or save your details.</p>
                <p id="contact-status" class="contact-status" role="status" aria-live="polite" tabindex="-1" hidden></p>
            </form>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush
