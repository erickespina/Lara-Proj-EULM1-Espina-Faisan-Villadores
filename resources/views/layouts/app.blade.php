
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ShizuKafe.brew')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @stack('styles')
</head>
<body>

    <div class="website-container">

       

<header class="navbar">

    <div class="navbar-left">

        <a href="/" class="logo">☕ ShizuKafe<span>.brew</span></a>

        <form class="search-box" role="search" action="{{ route('order') }}#coffee-menu" method="GET">
            <span>⌕</span>
            <input type="search" name="q" placeholder="Search coffee..." id="coffeeSearch" aria-label="Search coffees" value="{{ request('q', '') }}" maxlength="100">
        </form>

    </div>

    <nav class="nav-links">
        <a href="{{ request()->routeIs('order') ? '#coffee-menu' : route('order') . '#coffee-menu' }}">Order Coffee</a>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="#products">Our Product</a>
        <a href="#category">Category</a>
    </nav>

</header>



        <main>
            @yield('content')
        </main>

        <footer class="footer">
            <div class="footer-content">
                <div class="footer-brand">
                    <h2>☕ ShizuKafe<span>.brew</span></h2>
                    <p>Enjoy every sip of your favorite coffee.</p>
                </div>

                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p>Have questions or want to order coffee?</p>
                    <a href="/contact">Get in Touch ↗</a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2026 ShizuKafe.brew. All Rights Reserved.</p>
            </div>
        </footer>

    </div>

    @stack('scripts')

</body>
</html>
