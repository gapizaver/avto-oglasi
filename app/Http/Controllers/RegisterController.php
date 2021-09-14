<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view("user.register");
    }

    public function store()
    {
        // validation for registering a user
        $attributes = request()->validate([
            "email" => ["required", "email", "max:255", "unique:users,email"],
            "name" => ["required", "max:255", "min:3"],
            "phone" => ["max:255"],
            "password" => ["required", "min:6", "max:255"]
        ]);

        $user = User::create($attributes);

        // log the user in
        auth()->login($user);

        // flash message and redirect to main page.
        return redirect("/")->with("success", "Vaš račun je bil ustvarjen.");
    }
}
