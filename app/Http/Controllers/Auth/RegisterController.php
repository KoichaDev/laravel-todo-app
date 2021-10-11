<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('components.pages.auth.register');
    }

    public function store(Request $request) {
        // 1: This is to validate our form HTML
        $this -> validate($request, [
            // The get method is from the "name" attribute from our input DOM element
            'username'  => 'required|max:255',
            'email'     => 'required|email|max:255',
            'password'  => 'required|confirmed',
        ]);

        // 2: If everything is validating correctly, then we want it to send this request to our database
        User::create([
            'username'  => $request -> username,
            'email'     => $request -> email,
            'password'  => Hash::make($request -> password),
        ]);

        // 3. Need to make sure user is signed in after registration
        auth()->attempt($request -> only('email', 'password'));

        // 4: redirect to the user to a specific site
        // return redirect() -> route('dashboard');
    }
}
