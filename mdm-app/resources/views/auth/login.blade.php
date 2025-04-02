{{--@extends('layouts.default')--}}
{{--@section("title", "Login")--}}
{{--@section("content")--}}


{{--@endsection--}}










{{--@extends('layouts.default')--}}
{{--@section("title", "Login")--}}

{{--@section("content")--}}
{{--    <div class="container min-vh-100 d-flex justify-content-center align-items-center">--}}
{{--        <div class="row w-100 justify-content-center">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Login') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}

{{--                            <!-- Email Input -->--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Password Input -->--}}
{{--                            <div class="form-group row">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Remember Me Checkbox -->--}}
{{--                            <div class="form-group row">--}}
{{--                                <div class="col-md-8 offset-md-4">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                        <label class="form-check-label" for="remember">--}}
{{--                                            {{ __('Remember Me') }}--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Submit Button -->--}}
{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-8 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Login') }}--}}
{{--                                    </button>--}}

{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                            {{ __('Forgot Your Password?') }}--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}














{{--@extends('layouts.default')--}}
{{--@section("title", "Login")--}}

{{--@section("content")--}}
{{--    <div class="container d-flex justify-content-center align-items-center min-vh-100">--}}
{{--        <div class="card" style="width: 100%; max-width: 400px;">--}}
{{--            <div class="card-header text-center">--}}
{{--                <h4>{{ __('Login') }}</h4>--}}
{{--            </div>--}}

{{--            <div class="card-body">--}}
{{--                <form method="POST" action="{{ route('login') }}">--}}
{{--                    @csrf--}}

{{--                    <!-- Email Input -->--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="email">{{ __('Email Address') }}</label>--}}
{{--                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
{{--                        @error('email')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Password Input -->--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="password">{{ __('Password') }}</label>--}}
{{--                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
{{--                        @error('password')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Remember Me Checkbox -->--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                        <label class="form-check-label" for="remember">--}}
{{--                            {{ __('Remember Me') }}--}}
{{--                        </label>--}}
{{--                    </div>--}}

{{--                    <!-- Submit Button -->--}}
{{--                    <div class="form-group mt-3">--}}
{{--                        <button type="submit" class="btn btn-primary w-100">--}}
{{--                            {{ __('Login') }}--}}
{{--                        </button>--}}
{{--                    </div>--}}

{{--                    <!-- Forgot Password Link -->--}}
{{--                    <div class="form-group text-center mt-3">--}}
{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                {{ __('Forgot Your Password?') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




{{--@endsection--}}
























@extends('layouts.default')
@section("title", "Login")

@section("content")
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card" style="width: 100%; max-width: 400px;">
            <div class="card-header text-center">
                <h4>{{ __('Login') }}</h4>
            </div>

            <div class="card-body">
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100" id="loginButton">
                            {{ __('Login') }}
                        </button>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="form-group text-center mt-3">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript to refresh form on button click -->
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission
            this.reset(); // Reset the form fields
        });
    </script>

@endsection
