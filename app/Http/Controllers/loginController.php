<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function create()
    {
        return view ('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
            'remember' => ['sometimes', 'boolean'],
        ]);

        $remember = $data['remember'] ?? false;
        unset($data['remember']);

        if (auth()->attempt($data, $remember)) {
            // Prevent session fixation
            $request->session()->regenerate();

            // Redirect to intended route or a sensible default
            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        return back()
            ->withErrors(['username' => __('auth.failed')])
            ->onlyInput('username');
    }
}
