<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tomasilog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
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
        h1 {
            font-family: "Chonburi", serif;
            font-weight: 400;
            font-style: normal;           
            font-size: 2.5em;
            margin: 20px 0;
        }
        p {
            font-family: "Faculty Glyphic", serif;
            font-weight: 400;
            font-style: normal;
            font-size: 1em;
            text-align: justify;
        }
        footer {
            color: #54473F;
        }

        /* Our Story Section Styles */
        .our-story-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            text-align: left;
        }
        .our-story-section img {
            width: 40%;
            border-radius: 10px;
            object-fit: cover;
        }
        .our-story-content {
            width: 55%;
            padding-left: 20px;
        }

        .mission-vision-section {
            text-align: left;
            padding: 50px 0;
            position: relative;
        }

        .mission-vision-section h1 {
            text-align: center;
            font-family: "Chonburi", serif;
            font-weight: 400;
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .mission-vision-section h2 {
            font-family: "Chonburi", serif;
            font-weight: 400;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .mission-vision-section p {
            font-family: "Faculty Glyphic", serif;
            font-size: 1em;
            line-height: 1.8;
            text-align: justify;
        }

        .mission-vision-content {
            background-color: #A5B68D;            
            background-size: cover;
            background-position: center;
            padding: 40px;
            border-radius: 15px; 
            color: #fff; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
            text-align: center; 
            margin-bottom: 15px; 
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

    <!-- Section 2: Our Story -->
    <div class="section our-story-section">
        <!-- Image on the Left -->
        <img src="/images/abtpage.png" alt="Our Story Image">
        
        <!-- Text Content -->
        <div class="our-story-content">
            <h1>Our Story</h1>
            <p>Welcome to Tomasilog, where Filipino comfort food meets premium quality, straight from the heart of UST. Our story begins with a love for good food and a passion for bringing people together over delicious, home-cooked meals. Named after the beloved "silog" breakfast and the pride of being Thomasian, Tomasilog serves more than just silogs. We offer a wide range of flavorful Filipino dishes, including soups, pancit, and other comfort food favorites—all made with the finest ingredients and crafted to perfection.

Born in the vibrant, bustling environment of UST, Tomasilog is more than just a place to eat. It’s where students, faculty, and locals gather to enjoy great food, share stories, and make lasting memories. Whether you're craving a hearty silog meal, a bowl of comforting soup, or a savory pancit dish, we have something to satisfy every craving.

Our commitment to serving only the best starts with our ingredients. We handpick fresh, high-quality produce, meats, and spices, ensuring that each dish is made with care and served with love. Every meal at Tomasilog is crafted to deliver the authentic Filipino taste you know and love, with a touch of Thomasian pride.

At Tomasilog, we believe in more than just good food; we believe in creating a warm, welcoming space where everyone feels at home. Whether you’re grabbing a quick bite between classes, catching up with friends, or treating yourself to something special, Tomasilog is here to make your meal experience truly unforgettable.            </p>
        </div>
    </div>

    <!-- Section 3: Mission and Vision -->
    <div class="section mission-vision-section">
        <div class="container">
            <h1>Our Mission & Vision</h1>
            <div class="row mission-vision-content">
                <!-- Mission Column -->
                <div class="col-md-6">
                    <h2>Our Mission</h2>
                    <p>
                        Our mission at Tomasilog is to provide an exceptional Filipino dining experience, offering a wide range of premium-quality dishes—from silogs to signature meals—that showcase the rich flavors of Filipino cuisine. We aim to create a welcoming environment for everyone to enjoy authentic, flavorful meals made with the finest ingredients, all while celebrating the pride and spirit of being Thomasian.
                    </p>
                </div>
                <!-- Vision Column -->
                <div class="col-md-6">
                    <h2>Our Vision</h2>
                    <p>
                        Our vision is to become the go-to Filipino restaurant in the heart of UST, known for our commitment to quality, innovation, and excellent customer service. We aspire to continuously introduce new, exciting dishes to our menu while maintaining the authenticity and heart of Filipino comfort food, making Tomasilog a place where memories are made and shared over great meals.
                    </p>
                </div>
            </div>
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
