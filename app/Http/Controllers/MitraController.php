<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        $jurusan = Jurusan::all();
        return view('mitra.index', compact('mitra', 'jurusan'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_mitra' => 'required',
        //     'bidang' => 'required',
        // ]);
        Mitra::create($request->except('_token', 'submit'));
        return redirect(route('mitra.index'));
    }

    public function edit($id)
    {
        $mitra = Mitra::find($id);
        $jurusan = Jurusan::all();

        return view('mitra.edit', compact('jurusan', 'mitra'));
    }

    public function update(Request $request, Mitra $mitra)
    {
        $mitra->update($request->all());

        return redirect()->route('mitra.index')
            ->with('success', 'mitra berhasil di ubah');
    }

    public function destroy(Mitra $mitra)
    {
        $mitra->delete();
        return redirect()->route('mitra.index');
    }
}
