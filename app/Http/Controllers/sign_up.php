<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sign_up extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->identity_number = $request->input('identity_number');
        $user->email = $request->input('email');
        $user->nama = $request->input('nama');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        // ...
    }
}
