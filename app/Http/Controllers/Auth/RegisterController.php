<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'address' => 'required',
           // 'password_confirmation' => 'required|confirmed',


        ] );  

    

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);    

            auth()->attempt($request->only('email', 'password')               
               
                 /*['email' => $request->email,
                'password' => Hash::make($request->password),]*/
                            
            );

            //sign in
        return redirect()->route('dashboard');

        //store user
        //sign the user in
        //redirect
    }
}
