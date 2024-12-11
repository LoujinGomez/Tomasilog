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
        .sec {
            padding: 50px;
            text-align: center;
            min-height: 300px;
        }
        .section {
            padding: 50px;
            display: flex; /* Flex layout for horizontal alignment */
            justify-content: space-between; /* Space between the main content and summary */
            align-items: flex-start; /* Align items at the top */
            gap: 20px;
            text-align: left; /* Align text inside the container */
        }
        .section-container {
            flex: 2; /* Allocate more space to the menu section */
            max-width: 70%; /* Prevent it from stretching too wide */
            text-align: left; /* Align text to the left */
            padding: 0 20px; /* Adjust padding for better alignment */
        }

        .section-container h1 {
            margin-bottom: 10px;
            font-size: 2.5rem; /* Ensure consistency in header size */
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
            cursor: pointer;
        }
        .buy-button:hover {
            background-color: #ac6947;
        }
        .order-summary {
            flex: 1; /* Take up less space */
            align-self: flex-start; /* Align to the top */
            background-color: #F9F5F1;
            padding: 20px;
            border: 1px solid #DDD;
            border-radius: 10px;
            max-width: 350px;
            height: fit-content;
            text-align: left; /* Align text inside the summary */
        }

        .order-summary h3 {
            margin-top: 0; /* Remove unnecessary margins */
            font-size: 1.8rem;
        }
        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .total-price {
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
        .checkout-btn {
            display: block;
            background-color: #DA8359;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            margin-top: 10px;
        }
        .checkout-btn:hover {
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
            width: calc(100% - 100px); /* Adjust width to account for the button */
            display: inline-block; /* Align the input and button inline */
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
            text-align: left; /* Ensure the heading is left-aligned */
            margin-bottom: 15px; /* Maintain spacing below the heading */
        }
    </style>
</head>
<body>
    <div class="sec">
        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-logo">Tomasilog</div>
            <div class="navbar-links">
                <a href="{{ route('welcome') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('menu') }}">Menu</a>
                <a href="#history">History</a>
            </div>
            <div class="navbar-login">
                <a href="#login">Login</a>
            </div>
        </div>

    <div class="section">
        <!-- Main Content -->
        <div class="section-container">
            <h1>Our Menu</h1>
            <p class="section-description">Discover the best Filipino dishes that Tomasilog has to offer. From classic silogs to savory dishes, there's something for everyone!</p>
            <div class="product-container">
                <!-- Product 1 -->
                <div class="row">
                    @forelse ($menuItems as $item)
                        <div class="col-md-4 mb-4">
                            <div class="product-card">
                                <div class="circle-container">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="product-details">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{{ $item->description }}</p>
                                    <p class="product-price">₱{{ number_format($item->price, 2) }}</p>
                                    <button class="buy-button" onclick="addToSummary('{{ $item->name }}', {{ $item->price }})">Order</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No menu items available.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="order-summary">
            <h3>Order Summary</h3>
            <div id="order-items"></div>
            <div class="total-price" id="total-price">Total: ₱0</div>
            <a href="#checkout" class="checkout-btn">Checkout</a>
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

    <script>
        let total = 0;

        function addToSummary(itemName, itemPrice) {
            const orderItems = document.getElementById("order-items");
            const totalPrice = document.getElementById("total-price");

            // Add new item
            const itemElement = document.createElement("div");
            itemElement.className = "order-item";
            itemElement.innerHTML = `<span>${itemName}</span><span>₱${itemPrice}</span>`;
            orderItems.appendChild(itemElement);

            // Update total
            total += itemPrice;
            totalPrice.textContent = `Total: ₱${total}`;
        }
    </script>
</body>
</html>
