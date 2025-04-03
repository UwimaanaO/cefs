<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'student_number' => ['required', 'string', 'unique:users', 'max:255'], // Added validation for student_number
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'], // Ensure email is unique
            'telephone' => ['required', 'string', 'unique:users', 'max:255'], // Added validation for telephone
            'college' => ['required', 'string', 'max:255'], // Added validation for college
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'student_number' => $request->student_number, // Save the student_number
            'email' => $request->email,
            'telephone' => $request->telephone, // Save the telephone number
            'college' => $request->college, // Save the college
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
?>