<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();
        return view('alumni.layout.main', compact('lowongan'));
    }
}
