<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('admin.user.edit', ['user' => $user]);
    }

    public function store($user_id, Request $request)
    {
        $request->validate([
            'name',
            'email' => 'required',
            'password' => 'nullable|min:6|confirmed',
            'phone' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);
        $user = \App\User::findOrFail($user_id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->update();
        return redirect()->route('admin.index');
    }
}
