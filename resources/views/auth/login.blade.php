<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .validation-errors {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .session-status {
            color: green;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body class="login_body">
<div class="login-container">
    <h2>Login</h2>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="validation-errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="link-group">
            <a href="{{ route('password.request') }}" class="link">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button><br>
        Not a member? <a href="{{ route('register') }}" class="link">Sign Up</a>
    </form>
</div>
</body>
</html>
