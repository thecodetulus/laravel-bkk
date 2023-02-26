<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Menampilkan form register.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $alumni = Alumni::all();
        $jurusan = Jurusan::all();

        return view('alumni.register', compact('alumni', 'jurusan'));
    }

    /**
     * Menyimpan data user baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|string|unique:alumni',
            'id_jurusan' => 'required|exists:jurusan,id_jurusan',
            'nama_alumni' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'tahun_lulus' => 'required|integer|digits:4',
            'telepon' => 'required|string|max:255',
            'status' => 'required|in:belum menikah, menikah',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'foto' => 'nullable|image|max:2048',
        ]);

        // Jika ada file foto yang diupload, simpan ke dalam folder public/images dan dapatkan nama filenya.
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/images');
            $fotoPath = str_replace('public/', '', $fotoPath);
        }

        $alumni = new Alumni;
        $alumni->nis = $request->nis;
        $alumni->id_jurusan = $request->id_jurusan;
        $alumni->nama_alumni = $request->nama_alumni;
        $alumni->tempat_lahir = $request->tempat_lahir;
        $alumni->tanggal_lahir = $request->tanggal_lahir;
        $alumni->alamat = $request->alamat;
        $alumni->jenis_kelamin = $request->jenis_kelamin;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->telepon = $request->telepon;
        $alumni->status = $request->status;
        $alumni->email = $request->email;
        $alumni->password = Hash::make($request->password);
        $alumni->foto = $fotoPath;
        $alumni->save();

        return redirect()->route('login')->with('success', 'Akun Anda telah berhasil terdaftar.');
    }
}