<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomasilog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <!-- Section 1 with Navbar and Header -->
    <div class="section">
        <div class="navbar">
            <div class="navbar-logo">Tomasilog</div>
            <div class="navbar-links">
                 <a>Home</a>
                 <a href="{{ route('about') }}">About</a>
                <a href="{{ route('menu') }}">Menu</a>
                 @auth
                    <a href="{{ route('user.history') }}">Order History</a>
                @endauth
            </div>

            <div class="navbar-login">
                @auth
                    <!-- Dashboard Button -->
                    <a href="{{ route('dashboard') }}" >Dashboard</a>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" >Logout</button>
                    </form>
                @else
                    <!-- Login Button -->
                    <a href="{{ route('login') }}">Login</a>
                @endauth

            </div>
        </div>
        <div class="section1-container">
            <div class="section1-text">
                <h1>
                    TOMASILOG
                    <img src="/images/egg.png" alt="egg" class="icon">
                </h1>
                <div class="section1-description">
                    <p>A premium Filipino dining experience, from silogs to desserts. We are just a click away when you crave for a delicious fast food.</p>
                    <div class="button-container">
                        <a href="{{ route('menu') }}" class="check-menu-btn">Check Menu</a>
                        <a href="{{ route('menu') }}" class="explore-btn">Explore</a>
                    </div>                </div>
            </div>
            <img src="/images/home.png" alt="Tiger" class="section1-image">
        </div>
    </div>

    <!-- Section 2 -->
    <div class="section">
        <h1>Why Tomasilog?</h1>
            <div class="image-container">
                <div class="image-item">
                    <img src="/images/silog.png" alt="Food Choices" class="circle-image">
                    <p class="image-label">Filipino Comfort Food</p>
                    <p class="image-description">We serve up all your Filipino favorites—silog rice meals, warm soups, and tasty pancit—that’ll remind you of your mom’s home-cooked meals. Name it, we have it!</p>
                </div>
                <div class="image-item">
                    <img src="/images/affordable.png" alt="Affordable Meals" class="circle-image">
                    <p class="image-label">Affordable Meals</p>
                    <p class="image-description">Our menu is budget-friendly with generous servings that ensure customers leave full and happy. Satisfy your cravings with our affordable meals.</p>
                </div>
                <div class="image-item">
                    <img src="/images/best.png" alt="Image 3" class="circle-image">
                    <p class="image-label">Quality in Every Bite</p>
                    <p class="image-description">From the freshest ingredients to the way we whip up each dish, we make sure everything on your plate is packed with flavor and cooked just right. It’s all about giving you that perfect meal, every single time.</p>
                </div>
            </div>
    </div>

    <!-- Section 3 -->
    <div class="section">
        <h1>Our Categories</h1>
        <div id="categoriesCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#categoriesCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/silogs.jpg" class="d-block w-100 img-fluid" alt="Silog Dishes">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Silog Meals</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/dish.jpeg" class="d-block w-100 img-fluid" alt="Noodle">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Main Dishes</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/merienda.jpg" class="d-block w-100 img-fluid" alt="Merienda">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Merienda</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/noodle.jpg" class="d-block w-100 img-fluid" alt="Drinks">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Noodle</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/sidedish.jpg" class="d-block w-100 img-fluid" alt="Snacks">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Side Dishes</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/dessert.jpg" class="d-block w-100 img-fluid" alt="Desserts">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Desserts</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/juice.jpg" class="d-block w-100 img-fluid" alt="Pasta">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Juice</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/shake.jpg" class="d-block w-100 img-fluid" alt="Breakfast">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Shakes</h5>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#categoriesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoriesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    
<!-- Section 4 -->
<div class="section">
    <div class="section4-container">
        <h1>Our Specials</h1>
        <p class="section4-description">Explore our special selections that make your dining experience unforgettable.</p>
        <div class="product-container">
            <div class="row g-4">
                @forelse ($menuItems as $item)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="product-card">
                            <div class="circle-container">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="img-fluid">
                            </div>
                            <div class="product-details">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                                <p class="product-price">₱{{ number_format($item->price, 2) }}</p>
                                <a href="{{ route('menu', ['item' => $item->name, 'price' => $item->price]) }}" class="buy-button">Order Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No menu items available.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

    <!-- Section 5 -->
    <div class="section">
        <footer class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="/images/home.png" alt="Tomasilog Logo" style="max-width: 100px;">
                    </div>
                    
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
