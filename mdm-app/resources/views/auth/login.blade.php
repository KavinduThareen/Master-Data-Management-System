{{--@extends('layouts.default')--}}
{{--@section("title", "Login")--}}

{{--@section("content")--}}
{{--    <div class="container d-flex justify-content-center align-items-center min-vh-100">--}}
{{--        <div class="row w-100" style="max-width: 900px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">--}}

{{--            <!-- Left Section -->--}}
{{--            <div class="col-md-6 p-5 text-white" style="background: linear-gradient(135deg, #007bff, #00d4ff);">--}}
{{--                <h2 class="fw-bold">Welcome to MDM</h2>--}}
{{--                <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Start managing your data effortlessly with our professional platform.</p>--}}
{{--                <button class="btn btn-outline-light mt-3" style="font-weight: 600;">Know More</button>--}}
{{--            </div>--}}

{{--            <!-- Right Section -->--}}
{{--            <div class="col-md-6 bg-white p-5">--}}
{{--                <h3 class="text-center mb-4" style="font-weight: 700; color: #333;">Sign in to your account</h3>--}}
{{--                <form method="POST" action="{{ route('login') }}">--}}
{{--                    @csrf--}}

{{--                    <!-- Email Input -->--}}
{{--                    <div class="form-group mt-3">--}}
{{--                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Username ..." required>--}}
{{--                        @error('email')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Password Input -->--}}
{{--                    <div class="form-group mt-3">--}}
{{--                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password ..." required>--}}
{{--                        @error('password')--}}
{{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <!-- Submit Button -->--}}
{{--                    <div class="form-group mt-4 text-center">--}}
{{--                        <button type="submit" class="btn btn-primary w-100" style="font-weight: 600;">Login</button>--}}
{{--                    </div>--}}

{{--                    <!-- Sign Up Link -->--}}
{{--                    <div class="form-group mt-4 text-center">--}}
{{--                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="btn btn-link" style="font-weight: 600; color: #007bff;">Sign Up</a></p>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}















































<!-- login.blade.php -->

@extends('layouts.default')

@section("title", "Login")

@section("content")
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100" style="max-width: 900px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">

            <!-- Left Section -->
            <div class="col-md-6 p-5 text-white" style="background: linear-gradient(135deg, #007bff, #00d4ff);">
                <h2 class="fw-bold">Welcome to MDM</h2>
                <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Start managing your data effortlessly with our professional platform.</p>
                <button class="btn btn-outline-light mt-3" style="font-weight: 600;">Know More</button>
            </div>

            <!-- Right Section -->
            <div class="col-md-6 bg-white p-5">
                <h3 class="text-center mb-4" style="font-weight: 700; color: #333;">Sign in to your account</h3>
                <form id="loginForm" method="POST">
                    @csrf

                    <!-- Email Input -->
                    <div class="form-group mt-3">
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter Username ..." required>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group mt-3">
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password ..." required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-primary w-100" style="font-weight: 600;">Login</button>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="form-group mt-4 text-center">
                        <p class="mb-0">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="btn btn-link" style="font-weight: 600; color: #007bff;">Sign Up</a>
                        </p>
                    </div>



                </form>
            </div>
        </div>
    </div>

@endsection

@section("scripts")
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Handle login form submission
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();  // Prevent the default form submission

            // Get form data
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Make the login request using axios
            axios.post('/login', { email, password })
                .then(response => {
                    // No need to handle redirection manually, as the backend will redirect the user
                })
                .catch(error => {
                    console.error('Login error', error);
                    alert('Login failed! Please check your credentials.');
                });



        });
    </script>
@endsection





