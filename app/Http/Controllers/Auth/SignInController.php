<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('username', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login credentials');
        }

        return redirect()->route('dashboard');
    }
}
