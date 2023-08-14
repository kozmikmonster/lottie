@extends('layouts.admin')

@section('title','Admin Panel Home Page')

@section('content')

    <div class="login_register_popup">
        <form class="login_form">
            <h2>Login</h2>
            <form action="{{ route('admin_logincheck') }}" method="post">
                @csrf
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <button type="submit">Login</button>
            </form>
            <form class="register_form">
                <h2>Register</h2>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password">
                <button type="submit">Register</button>
            </form>
    </div>
@endsection
