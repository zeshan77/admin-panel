@extends('zadmin::layouts.auth')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <p class="mb-4 text-center">Please fill in the following form to login.</p>
        <div class="mb-6">
            <input type="email" class="input" placeholder="Type your email" name="email" value="{{ old('email') }}"
                   required
                   autofocus>
            @if ($errors->has('email'))
                <span class="input-error"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        <div class="mb-6">
            <input type="password" name="password" class="input" placeholder="Type your password" required>
            @if ($errors->has('password'))
                <span class="input-error"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>
        <div class="btn">
            <button class="btn-blue" type="submit">Login</button>
            <a class="a" href="/admin/forgot-password">Forgot Password?</a>
        </div>
    </form>
@endsection