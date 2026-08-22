<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $namaDepan = $request->nama_depan;
        $namaBelakang = $request->nama_belakang;

        return view('welcome', compact('namaDepan', 'namaBelakang'));
    }
}