<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class umum extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'NIM'           => 'required|size:8|unique:presensis,NIM',
            'nama'          => 'required|min:3|max:50',
            'kehadiran'     => 'required|in:H,A,S,I',
        ]);
        // dump($validateData);
        Mahasiswa::create($validateData);
        
        $request->session()->flash('pesan',"Penambahan data
        {$validateData['nama']} berhasil");
        return redirect()->route('umums.index');
    }
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim'           => 'required|size:8|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama'          => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => '',
        ]);

        $mahasiswa->update($validateData);
        return redirect()->route('mahasiswas.show',['mahasiswa'=>$mahasiswa->id])
            ->with('pesan',"Update data {$validateData['nama']} berhasil ");
    }
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')
        ->with('pesan',"Hapus data $mahasiswa->nama berhasil");
    }
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',['mahasiswa' => $mahasiswa]);
    }
}
