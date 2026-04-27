<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

@extends('layouts.auth')
@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="login-left">
            <img src="https://picsum.photos/400/500" alt="image">
        </div>
    <div class="login-right">
            <h2>Login</h2>
            <form action="/dashboard" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button>Login</button>
            </form>
    
            <div class="login-links">
                <a href="#">Create account</a>
                <a href="#">Forgot password</a>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>