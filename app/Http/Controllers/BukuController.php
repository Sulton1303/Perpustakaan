<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return view('buku', compact('data'));
    }

    public function create()
    {
        return view('tambah-buku');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }
}