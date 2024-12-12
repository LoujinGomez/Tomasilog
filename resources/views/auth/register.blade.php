<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="login_body">
<div class="login-container">
    <h2>Signup</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Re-enter Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter your password" required>
        </div>
        <div class="link-group">
            <a href="#" class="link">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Create Account</button><br>
        Have an account already? <a href="{{ route('login') }}" class="link">Login</a>
    </form>
</div>
</body>
</html>
