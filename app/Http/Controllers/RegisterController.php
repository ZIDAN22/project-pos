<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



    
class RegisterController extends Controller
{
    /**
     * Display a  listing of the resource.
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
    }

}
