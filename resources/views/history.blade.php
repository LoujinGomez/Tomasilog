<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Tomasilog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Faculty+Glyphic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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
            margin-right: auto;
        }
        .navbar-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .navbar-links a {
            text-decoration: none;
            color: #333;
            font-size: 1em;
        }
        .navbar-login {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: auto;
        }
        .navbar-login a, .navbar-login button {
            display: inline-block;
            background-color: #DA8359;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            border: none;
        }
        .navbar-login a:hover, .navbar-login button:hover {
            background-color: #ac6947;
        }
        .sec {
            padding: 50px;
            text-align: center;
            min-height: 300px;
        }
        .section {
            padding: 30px;
            display: flex;
            flex-wrap: wrap; /* Allow wrapping for smaller screens */
            gap: 30px; /* Add space between the menu and summary */
            justify-content: center;
            align-items: flex-start;
            text-align: left;
        }

        .section-container {
            flex: 2;
            max-width: 70%; /* Limit the width */
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

        .order-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .order-item span:first-child {
            flex: 2; /* Item name */
            text-align: left;
        }

        .order-item span:nth-child(2) {
            flex: 1; /* Price and quantity */
            text-align: center;
        }

        .order-item button {
            flex: 0; /* Buttons take up minimal space */
            margin: 0 2px;
        }

        .order-buttons {
            display: flex;
            gap: 5px; /* Space between buttons */
        }

        @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: center;
        }

        .navbar-links {
            flex-wrap: wrap;
            gap: 10px;
            width: 100%;
            justify-content: center;
        }

            .table {
                font-size: 0.8em;
            }
            .navbar-logo {
                font-size: 1.2em;
            }
        }
        @media (max-width: 480px) {
            .navbar-logo {
            font-size: 1.2em;
        }

        .navbar-links a, .navbar-login a {
            font-size: 0.9em;
        }
            .table {
                font-size: 0.75em;
            }
            .table th,
            .table td {
                padding: 5px;
            }
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
                <a>Order History</a>
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

    <div class="section">
        <!-- Main Content -->
        <div class="container mt-5">
    <h1 class="mb-4">Order History</h1>
    @if ($orders->isEmpty())
        <p class="text-center">You have no order history yet.</p>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Summary</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>₱{{ number_format($order->total_price, 2) }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->summary }}</td>
                        <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
    @if ($order->status === 'Pending')
        <form action="{{ route('orders.cancel', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this order?');">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    @elseif ($order->status === 'Cancelled')
        <span class="text-muted">Cancelled</span>
    @else
        <span class="text-muted">Cannot be cancelled</span>
    @endif
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    @if (session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            backgroundColor: "#4CAF50",
        }).showToast();
    @endif

    @if (session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "#f44336", // Red for errors
        }).showToast();
    @endif
</script>


</body>
</html>
