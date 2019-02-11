@extends('zadmin::layouts.auth')

@section('content')
    <p class="mb-4 text-center">Reset password</p>
    <input type="text" class="input" placeholder="Type your email">
    <div class="btn">
        <button class="btn-blue">Reset password</button>
        <a class="a" href="/admin/login">Go back to login</a>
    </div>
@endsection