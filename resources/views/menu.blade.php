<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Tomasilog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: "Faculty Glyphic", serif;
            font-weight: 400;
            font-style: normal;
            color: #54473F;
            margin: 0;
            background-color: #FCFAEE;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #FCFAEE;
        }
        .navbar-logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .navbar-links {
            display: flex;
            gap: 20px;
        }
        .navbar-links a {
            text-decoration: none;
            color: #333;
            font-size: 1em;
        }
        .navbar-login a {
            display: inline-block;
            background-color: #DA8359; 
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
        }
        .navbar-login a:hover {
            background-color: #ac6947;
        }
        .section {
            padding: 50px;
            text-align: center;
            min-height: 300px;
        }

        .section-container {
            text-align: center;
            padding: 50px 20px;
        }

        .section-title {
            margin-bottom: 20px;
        }

        .product-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product-card {
            background-color: #ECDFCC;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            padding: 15px;
            position: relative;
        }

        .circle-container {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            border: 2px solid #ccc;
        }

        .circle-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-details {
            margin-top: 15px;
        }

        .product-details h3 {
            font-size: 1.2em;
            margin: 10px 0 5px;
        }

        .product-details p {
            font-size: 0.9em;
            color: #666;
        }

        .product-price {
            font-size: 1.1em;
            font-weight: bold;
            margin-top: 10px;
        }

        .buy-button {
            display: inline-block;
            background-color: #DA8359;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            border: none;
        }

        .buy-button:hover {
            background-color: #ac6947;
        }

        footer h5 {
            font-family: "Faculty Glyphic", serif;
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        footer img.social-icon {
            transition: transform 0.2s ease-in-out;
            width: 40px;
        }

        footer img.social-icon:hover {
            transform: scale(1.1);
        }

        footer .email-input {
            width: calc(100% - 100px); 
            display: inline-block; 
        }

        footer form {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer .subscribe-btn {
            display: inline-block;
            background-color: #DA8359;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            outline: none;
            border: none;
            margin-left: 10px;
        }

        footer .subscribe-btn:hover {
            background-color: #ac6947;
        }

        footer .col-md-4 h5 {
            text-align: center; /* Ensure the heading is left-aligned */
            margin-bottom: 15px; /* Maintain spacing below the heading */
        }

    </style>
</head>
<body>
    <div class="section">
        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-logo">Tomasilog</div>
            <div class="navbar-links">
                <a href="{{ route('welcome') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('menu') }}">Menu</a>
            </div>
            <div class="navbar-login">
            @auth
                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <!-- Login Button -->
                <a href="{{ route('login') }}" >Login</a>
            @endauth
            </div>
        </div>
        <div class="section-container">
            <h1>Our Menu</h1>
            <p class="section-description">Discover the best Filipino dishes that Tomasilog has to offer. From classic silogs to savory dishes, there's something for everyone!</p>
            <div class="product-container">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="circle-container">
                        <img src="/images/tapsilog.png" alt="Tapsilog">
                    </div>
                    <div class="product-details">
                        <h3>Tapsilog</h3>
                        <p>A dish that brings together tender marinated beef, garlic fried rice, and a perfectly fried egg.</p>
                        <p class="product-price">₱79</p>
                        <button class="buy-button">Order Now</button>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="circle-container">
                        <img src="/images/caldereta.jpg" alt="Caldereta">
                    </div>
                    <div class="product-details">
                        <h3>Caldereta</h3>
                        <p>A hearty Filipino stew with tender beef, rich tomato sauce, and vibrant vegetables.</p>
                        <p class="product-price">₱89</p>
                        <button class="buy-button">Order Now</button>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="circle-container">
                        <img src="/images/sinigang.jpg" alt="Sinigang">
                    </div>
                    <div class="product-details">
                        <h3>Sinigang</h3>
                        <p>A savory and sour tamarind-based soup with pork and assorted vegetables.</p>
                        <p class="product-price">₱79</p>
                        <button class="buy-button">Order Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="circle-container">
                        <img src="/images/sinigang.jpg" alt="Sinigang">
                    </div>
                    <div class="product-details">
                        <h3>Sinigang</h3>
                        <p>A savory and sour tamarind-based soup with pork and assorted vegetables.</p>
                        <p class="product-price">₱79</p>
                        <button class="buy-button">Order Now</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="circle-container">
                        <img src="/images/sinigang.jpg" alt="Sinigang">
                    </div>
                    <div class="product-details">
                        <h3>Sinigang</h3>
                        <p>A savory and sour tamarind-based soup with pork and assorted vegetables.</p>
                        <p class="product-price">₱79</p>
                        <button class="buy-button">Order Now</button>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
        </div>

        <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <!-- First Column: Logo -->
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="/images/home.png" alt="Tomasilog Logo" style="max-width: 100px;">
                </div>

                <!-- Second Column: Social Media -->
                <div class="col-md-4 text-center">
                    <h5>Follow us on our social media</h5>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="/images/ig.png" alt="Instagram" class="social-icon">
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="/images/fb.png" alt="Facebook" class="social-icon">
                        </a>
                        <a href="https://www.tiktok.com" target="_blank">
                            <img src="/images/tiktok.png" alt="Tiktok" class="social-icon">
                        </a>
                    </div>
                </div>

                <!-- Third Column: Receive Updates -->
                <div class="col-md-4">
                    <h5>Keep updated?</h5>
                    <form class="mt-3">
                        <input type="email" class="form-control email-input" placeholder="Enter your email" aria-label="Email">
                        <button type="submit" class="subscribe-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>
</html>
