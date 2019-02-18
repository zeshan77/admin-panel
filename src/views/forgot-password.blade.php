@extends('zadmin::layouts.auth')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <p class="mb-4 text-center">Reset password</p>
        <div class="">
            <input type="email" class="input" placeholder="Type your email" name="email" required autofocus>

            @if ($errors->has('email'))
                <span class="input-error" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="btn">
            <button class="btn-blue">Reset password</button>
            <a class="a" href="/admin/login">Go back to login</a>
        </div>
    </form>
@endsection