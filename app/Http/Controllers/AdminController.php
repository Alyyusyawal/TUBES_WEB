<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;

class AdminController extends Controller
{
    public function index()
    {
        $signups = Signup::all();
        return view('admin',['signups'=> $signups]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:3|max:50',
            'NIM'           => 'required|size:8|unique:signups,NIM',
            'email'         => 'required|email|unique:signups,email',
            'password'      => 'required|min:6',
            'role'          => 'required',
        ]);

        Signup::create($validateData);

        $request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        return redirect()->route('admins.index');
    }

    public function show(Signup $signup)
    {
        return view('admin.show',['signup' => $signup]);
    }

    public function edit(Signup $signup)
    {
        return view('admin.edit',['signup' => $signup]);
    }
    
    public function update(Request $request, Signup $signup)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:3|max:50',
            'NIM'           => 'required|size:8|unique:signups,NIM,'.$signup->id,
            'email'         => 'required|email|unique:signups,email,'.$signup->id,
            'password'      => 'required|min:6',
            'role'          => 'required',
        ]);
    
        $signup->update($validateData);
        return redirect()->route('admins.show',['signup'=>$signup->id])
            ->with('pesan',"Update data {$validateData['nama']} berhasil ");
    }
    

    public function destroy(Signup $signup)
    {
        $signup->delete();
        return redirect()->route('admins.index')
        ->with('pesan',"Hapus data $signup->nama berhasil");
    }
}
