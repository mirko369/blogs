<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration()
    {
        return view("user.registration");
    }

    public function authentication()
    {
        return view("user.authentication");
    }

    public function register(Request $request)
    {
        $formInput = $request->validate([
            "email" => "required|string|unique:users,email",
            "name" => "required|string",
            "password" => "required|string|confirmed"
        ]);
        
        $formInput["password"] = bcrypt($formInput["password"]);

        $user = User::create($formInput);

        // Login User
        auth()->login($user);

        return redirect("/");
    }

    public function logout(Request $request)
    {
        auth()->logout($request);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }

    public function login(Request $request)
    {
        $formInput = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if(auth()->attempt($formInput))
        {
            $request->session()->regenerate();

            return redirect("/");
        }

        return back();
    }
}
