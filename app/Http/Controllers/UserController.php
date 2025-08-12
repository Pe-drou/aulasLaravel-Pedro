<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }
    public function store(Request $request)
    {
        // dd ($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('user-create');
    }
    public function index()
    {
        return view('welcome');
    }
}
