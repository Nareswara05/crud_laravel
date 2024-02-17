<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.all', [
            'kelas' => Kelas::all()
        ]);
    }

    
    public function create()
    {
        return view('kelas.create');
    }

    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_kelas' => 'required',            
    ]);

    Kelas::create($validatedData);

    return redirect('/kelas/all')->with('success', 'data berhasil ditambahkan');
}


   
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit',[
            'nama_kelas' => $kelas,
        ]);
    }

    
    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        Kelas::where('id', $kelas->id)->update([
            'nama_kelas' => $request->nama_kelas,
        ]);
        Session::flash('success', 'Data berhasil diubah');
        return redirect('/kelas/all');
    }

    public function destroy(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);
        return redirect('/kelas/all');
    }
}
