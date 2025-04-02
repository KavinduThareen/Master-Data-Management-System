@extends('layouts.default')
@section("title", "Register")

@section("content")
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100" style="max-width: 900px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">

            <!-- Left Section -->
            <div class="col-md-6 p-5 text-white" style="background: linear-gradient(135deg, #007bff, #00d4ff);">
                <h2 class="fw-bold">Join MDM</h2>
                <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Start managing your data effortlessly with our professional platform.</p>
                <button class="btn btn-outline-light mt-3" style="font-weight: 600;">Know More</button>
            </div>

            <!-- Right Section -->
            <div class="col-md-6 bg-white p-5">
                <h3 class="text-center mb-4" style="font-weight: 700; color: #333;">Create your account</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Role Selection Dropdown -->
                    <div class="form-group mt-3">
                        <select class="form-control @error('is_admin') is-invalid @enderror" name="is_admin" required>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                        @error('is_admin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <!-- Name Input -->
                    <div class="form-group mt-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name ..." required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="form-group mt-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email ..." required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="form-group mt-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password ..." required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password ..." required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-primary w-100" style="font-weight: 600;">Register</button>
                    </div>

                    <!-- Login Link -->
                    <div class="form-group mt-4 text-center">
                        <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="btn btn-link" style="font-weight: 600; color: #007bff;">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>



@endsection
