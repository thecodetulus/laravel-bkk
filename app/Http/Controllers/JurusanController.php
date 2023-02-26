<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_jurusan' => 'required',
        //     'bidang' => 'required',
        // ]);
        Jurusan::create($request->except('_token', 'submit'));
        return redirect(route('jurusan.index'));
    }

    public function edit($id)
    {
        $jurusan = Jurusan::find($id);

        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $jurusan->update($request->all());

        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan berhasil di ubah');
    }

    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect()->route('jurusan.index');
    }

}
