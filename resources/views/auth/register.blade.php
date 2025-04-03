<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center vh-50">
        <div class="card p-4 shadow-lg" style="width: 350px;">

            <!-- Logo -->
            <div class="text-center">
                <img src="{{ asset('images/cefs logo.png') }}" alt="CEFS Logo" style="width: 50px;"
                    class="mx-auto d-block">
            </div>

            <!-- Title -->
            <h2 class="text-center font-weight-bold mt-2">CEFS</h2>
            <p class="text-center">Register Here</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <x-text-input id="name" class="form-control" type="text" name="name" placeholder="Name"
                        :value="old('name')" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Student Number -->
                <div class="form-group">
                    <x-text-input id="student_number" class="form-control" type="text" name="student_number"
                        placeholder="Student Number" :value="old('student_number')" required />
                    <x-input-error :messages="$errors->get('student_number')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="form-group">
                    <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Email"
                        :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Telephone Number -->
                <div class="form-group">
                    <x-text-input id="telephone" class="form-control" type="text" name="telephone"
                        placeholder="Telephone No." :value="old('telephone')" required />
                    <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                </div>

                <!-- College -->
                <div class="form-group">
                    <x-text-input id="college" class="form-control" type="text" name="college" placeholder="College"
                        :value="old('college')" required />
                    <x-input-error :messages="$errors->get('college')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group position-relative">
                    <x-text-input id="password" class="form-control pr-5" type="password" name="password"
                        placeholder="Password" required />
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"
                        style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;"></span>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group position-relative">
                    <x-text-input id="password_confirmation" class="form-control pr-5" type="password"
                        name="password_confirmation" placeholder="Confirm Password" required />
                    <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"
                        style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;"></span>
                </div>

                <!-- Terms & Conditions -->
                <div class="form-check mt-3">
                    <input id="terms" type="checkbox" class="form-check-input" required>
                    <label class="form-check-label small" for="terms">Agree to our <a href="#"
                            class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy
                            Policy</a></label>
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn btn-success btn-block mt-3">Continue</button>

                <!-- Login Redirect -->
                <div class="text-center mt-3">
                    <p class="mb-0">Already have an Account? <a href="{{ route('login') }}"
                            class="text-success font-weight-bold">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap & FontAwesome for Eye Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script>
        // Toggle Password Visibility
        $(".toggle-password").click(function () {
            let input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
                $(this).removeClass("fa-eye").addClass("fa-eye-slash");
            } else {
                input.attr("type", "password");
                $(this).removeClass("fa-eye-slash").addClass("fa-eye");
            }
        });
    </script>
</x-guest-layout>