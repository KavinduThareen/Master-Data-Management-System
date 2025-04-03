
@extends('layouts.default')

@section("title", "Login")

@section("content")
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-70" style="max-width: 1000px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2); /* Stronger shadow for more depth */
            border-radius: 15px; overflow: hidden;
            height: 500px;
            transform: perspective(1000px) rotateX(3deg); /* Slight tilt for modern look */
            transition: transform 0.3s ease-in-out; background: #ffffff;">

            <!-- Left Section -->
            <div class="col-md-6 p-5 text-white" style="background: linear-gradient(135deg, #007bff, #00d4ff);">
                <h2 class="fw-bold">Welcome to MDM</h2>
                <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Start managing your data effortlessly with our professional platform.</p>
                <button class="btn btn-outline-light mt-3" style="font-weight: 600; padding: 10px 30px; border-radius: 25px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.backgroundColor='transparent'">
                    Know More
                </button>
            </div>

            <!-- Right Section -->
            <div class="col-md-6 bg-white p-5" style="box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1); border-radius: 10px; padding: 35px;">

                <h3 class="text-center mb-4" style="font-weight: 700; color: #333;">Sign in to your account</h3>

                <form id="loginForm" method="POST">
                    @csrf

                    <!-- Email Input -->
                    <div class="form-group mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Enter Username ..." required
                               style="border-radius: 8px; border: 2px solid #007bff; padding: 12px; box-shadow: 0 5px 10px rgba(0, 91, 187, 0.1); transition: box-shadow 0.3s ease;">
                    </div>

                    <!-- Password Input -->
                    <div class="form-group mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Enter Password ..." required
                               style="border-radius: 8px; border: 2px solid #007bff; padding: 12px; box-shadow: 0 5px 10px rgba(0, 91, 187, 0.1); transition: box-shadow 0.3s ease;">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group mt-4 text-center">
                        <button type="submit" class="btn btn-primary w-100 btn-lg" style="font-weight: 600; padding: 14px;
                            box-shadow: 0 10px 25px rgba(0, 91, 187, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 8px;"
                                onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 35px rgba(0, 91, 187, 0.4)'"
                                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 25px rgba(0, 91, 187, 0.3)'">
                            Login
                        </button>
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

