@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50 shadow">
        <div class="card-body">
            <div class="text-center mb-4">
                <img src="https://via.placeholder.com/200x200" alt="Logo" width="150">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="{{ route('register') }}">Register sekarang</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
