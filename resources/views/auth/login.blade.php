<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center vh-50">
        <div class="card p-4 shadow-lg" style="width: 350px;">
            
            <!-- Logo -->
            <div class="text-center">
                <img src="{{ asset('images/cefs logo.png') }}" alt="CEFS Logo" style="width: 50px;" class="mx-auto d-block">
            </div>

            <!-- Title -->
            <h2 class="text-center font-weight-bold mt-2">CEFS</h2>
            <p class="text-center">Login</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <x-text-input id="student_number" class="form-control" type="text" name="student_number" placeholder="Student Number" required />
                    <x-input-error :messages="$errors->get('student_number')" class="mt-2" />
                </div>
                
                <div class="form-group">
                    <x-text-input id="password" class="form-control" type="password" name="password" placeholder="Password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Separator
                <div class="text-center my-2">
                    <small>or</small>
                </div>

                 Registration Number
                <div class="form-group">
                    <x-text-input id="registration_number" class="form-control" type="text" name="registration_number" placeholder="Registration Number" />
                </div> -->

                <!-- Login Button -->
                <button type="submit" class="btn btn-success btn-block">Login</button>

                <!-- Remember Me -->
                <div class="form-check mt-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember_me">Remember Me</label>
                </div>

                <!-- Forgot Password & Register -->
                <div class="text-center mt-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-primary">Forgot your password?</a>
                    @endif
                    <p class="mt-2">Don’t have an Account? <a href="{{ route('register') }}" class="text-success font-weight-bold">Create Account</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
</x-guest-layout>
