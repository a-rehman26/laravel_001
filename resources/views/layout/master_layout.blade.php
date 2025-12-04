<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>

    <!-- NAVBAR -->
    <header class="header">
        <div class="container">
            <div class="logo">BrandName</div>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('Home_Page01') }}">Home</a></li>
                    <li><a href="{{ route('About_Page01') }}">About</a></li>
                    <li><a href="{{ route('Contact_Page01') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">&#9776;</div>
        </div>
    </header>

    <!-- CONTENT SECTION -->
    <section class="hero">
        @yield('content')
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-box">
                <h2>BrandName</h2>
                <p>Delivering high-quality services with modern design.</p>
            </div>

            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Portfolio</a>
            </div>

            <div class="footer-box">
                <h3>Contact</h3>
                <p>Email: info@brand.com</p>
                <p>Phone: +91 9876543210</p>
            </div>

            <div class="footer-box">
                <h3>Follow Us</h3>
                <div class="social">
                    <a href="#">🔵</a>
                    <a href="#">🟣</a>
                    <a href="#">🔴</a>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            © 2025 A_Rehman • All Rights Reserved.
        </div>
    </footer>

    @stack('scripts_files')
</body>
</html>
