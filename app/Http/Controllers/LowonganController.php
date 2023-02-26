<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Mitra;

class LowonganController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        $admin = Admin::all();
        $jurusan = Jurusan::all();
        $lowongan = Lowongan::all();
        return view('lowongan.index', compact('mitra', 'admin', 'lowongan', 'jurusan'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_lowongan' => 'required',
        //     'bidang' => 'required',
        // ]);
        Lowongan::create($request->except('_token', 'submit'));
        return redirect(route('lowongan.index'));
    }

    public function edit($id)
    {
        $lowongan = Lowongan::find($id);
        $admin = Admin::all();
        $mitra = Mitra::all();
        $jurusan = Jurusan::all();

        return view('lowongan.edit', compact('jurusan', 'mitra', 'admin', 'lowongan'));
    }

    public function update(Request $request, Lowongan $lowongan)
    {
        $lowongan->update($request->all());

        return redirect()->route('lowongan.index')
            ->with('success', 'lowongan berhasil di ubah');
    }

    public function destroy(lowongan $lowongan)
    {
        $lowongan->delete();
        return redirect()->route('lowongan.index');
    }
}
