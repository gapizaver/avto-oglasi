<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view("session.create");
    }

    // login handler
    public function store() {
        // validate the request
        $attributes = request()->validate([
            "email" => ["required"],
            "password" => ["required"]
        ]);

        // attempt to log in the user
        if (auth()->attempt($attributes)){
            session()->regenerate();
            // redirect with a success flash message
            return redirect("/")->with("success", "Dobrodošel!");
        }

        // auth failed
        return back()
            ->withInput()
            ->withErrors(["password" => "Prijava ni uspela. Email naslov ne obstaja ali je geslo napačno"]);
    }


    // logout handler
    public function destroy()
    {
        auth()->logout();

        return redirect("/")->with("success", "Nasvidenje!");
    }
}
