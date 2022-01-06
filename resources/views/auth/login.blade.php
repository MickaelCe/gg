@extends('layouts.guest')

@section('content')
    <div class="card-body login-card-body bg-transparent log mt-5">
        <p class="login-box-msg"><span class="action px-2">Welcome</span>back !</p>

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="input-group mb-3 border-0">
                <input type="email" name="email" class="form-control border-0 bg-transparent loginput secondary @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required autofocus>
                <div class="input-group-append loginput secondary">
                    <div class="input-group-text border-0">
                        <span class="fas fa-envelope secondary"></span>
                    </div>
                </div>
                @error('email')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-5">
                <input type="password" name="password" class="form-control border-0 bg-transparent loginput secondary @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
                <div class="input-group-append loginput secondary">
                    <div class="input-group-text border-0">
                        <span class="fas fa-lock secondary"></span>
                    </div>
                </div>
                @error('password')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="row mb-5">
                <div class="col-5">
                    <a class="btn btn-secondary btn-block" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <p class="my-0 text-center text-white">OR</p>
                </div>
                <!-- /.col -->
                <div class="col-5">
                    <button type="submit" class="btn btn-action btn-block">{{ __('Login') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        @if (Route::has('password.request'))
            <p class="mb-1">
                <a class="secondary" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </p>
        @endif
    </div>
    <!-- /.login-card-body -->
@endsection