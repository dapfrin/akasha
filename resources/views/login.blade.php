<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet"/>
    <script src="https://unpkg.com/feather-icons"></script>
    <!--my style-->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" /> <!-- Menggunakan asset() untuk mengakses file CSS -->
    <script src="https://kit.fontawesome.com/158e097b9e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <img src="/image/head1.jpg" alt="" class="header-image">
        <div class="login-container">
            <div class="logo">
                <i class="fa-solid fa-meteor"></i>
            </div>
            <img src="/image/logo.png" alt="">
            <h2>Fashion awaits <br>log in now!</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- Menambahkan token CSRF untuk keamanan form -->
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
        
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
        
                <input type="submit" value="login">
            </form>
            <p>Don't have an account? <a href="{{ route('register') }}"><span>Register here</span></a></p>
        </div>
    </div>
</body>
</html>
