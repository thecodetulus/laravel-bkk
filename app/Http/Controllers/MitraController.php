<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        return view('mitra.index', compact('mitra'));
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
