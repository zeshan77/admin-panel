@extends('zadmin::layouts.auth')

@section('content')
    <p class="mb-4 text-center">Please fill in the following form to login.</p>
    <input type="text" class="input" placeholder="Type your email">
    <input type="password" class="input" placeholder="Type your password">
    <div class="btn">
        <button class="btn-blue">Login</button>
        <a class="a" href="/admin/forgot-password">Forgot Password?</a>
    </div>
@endsection