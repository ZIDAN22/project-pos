<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



    
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
<<<<<<< HEAD
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        if ($user) {
            return redirect()
                ->route('login')
                ->with('success', 'Registrasi berhasil. Silahkan login.');
        }

        return back()
            ->withInput()
            ->with('error', 'Registrasi gagal. Silahkan coba lagi.');
=======
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create the user
        \App\Models\User::create([
            'name' => $validated['nama'],
            'email' => $validated['email'],
            'password' => \Illuminate\Support\Facades\Hash::make($validated['password']),
        ]);

        // Redirect to login or dashboard
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
>>>>>>> acf2fa6c6c8da04468b07440f8a45f6b35040bcc
    }

}
