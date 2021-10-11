<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () {
        return view ('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validate['password'] = bcrypt($validated['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // $information = [
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => $pass
        // ];

        User::create($validatedData);
        // $request->session()->flash('success', 'Reqistration successfull! Please Login');
        return redirect('/login')->with('success', 'Reqistration successfull! Please Login');
    }
}
