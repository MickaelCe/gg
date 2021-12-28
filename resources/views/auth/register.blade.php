@extends('layouts.guest')

@section('content')
    <div class="card-body login-card-body bg-transparent log">
        <p class="login-box-msg">Join us <span class="action px-2">now !</span></p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control border-0 bg-transparent loginput secondary @error('name') is-invalid @enderror"
                       placeholder="{{ __('Name') }}" required autocomplete="name" autofocus>
                <div class="input-group-append loginput secondary">
                    <div class="input-group-text border-0">
                        <span class="fas fa-user secondary"></span>
                    </div>
                </div>
                @error('name')
                <span class="error invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control border-0 bg-transparent loginput secondary @error('email') is-invalid @enderror"
                       placeholder="{{ __('Email') }}" required autocomplete="email">
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

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control border-0 bg-transparent loginput secondary @error('password') is-invalid @enderror"
                       placeholder="{{ __('Password') }}" required autocomplete="new-password">
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

            <div class="input-group mb-3">
                <input type="password" name="password_confirmation"
                       class="form-control border-0 bg-transparent loginput secondary @error('password_confirmation') is-invalid @enderror"
                       placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                <div class="input-group-append loginput secondary">
                    <div class="input-group-text border-0">
                        <span class="fas fa-lock secondary"></span>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-5">
                    <a class="btn btn-secondary btn-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <p class="my-0 text-center text-white">OR</p>
                </div>
                <div class="col-5">
                    <button type="submit" class="btn btn-action btn-block">{{ __('Register') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
