<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('asset/login-style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background: url({{ asset('asset/bumi.jpeg') }});
            background-size: 30%; /* Untuk menutupi seluruh area */
            background-position: center; /* Memusatkan gambar */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white; /* Sesuaikan warna teks agar kontras dengan background */
        }
    </style>
</head>
<body style="">
    <div class="login-container">
        <h1>Login to Your Account</h1>
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="links">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
            <a href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>
</body>
</html>