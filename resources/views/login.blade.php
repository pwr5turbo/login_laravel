@extends('layout')
@section('title', 'Login')
@section('styles')
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
@endsection
@section('content')
    <div class="container">
        <h1 class="ms-auto me-auto mt-auto login_header">Login</h1>
        <form  method="POST" action="{{ route('login.Post') }}" class="ms-auto me-auto mt-auto login_form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
 