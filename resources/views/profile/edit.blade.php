
<x-app-layout>
    <div class="d-flex justify-content-center align-items-center vh-50">
        <div class="card p-4 shadow-lg" style="width: 800px; margin-left: 25%;">
                <h4 class="text-xl font-semibold mb-4">Update Profile Information</h4>
                @include('profile.partials.update-profile-information-form')

                <h4 class="text-xl font-semibold mb-4">Change Password</h4>
                @include('profile.partials.update-password-form')
            </div>
        </div>
</x-app-layout>
