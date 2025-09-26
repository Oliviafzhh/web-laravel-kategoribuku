<?php

// app/Http/Controllers/KategoriBukuController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    // Menampilkan halaman kategori buku
    public function index()
    {
        return view('kategori-buku.kategori-buku');
    }

    // Menampilkan halaman tambah kategori buku
    public function create()
    {
        return view('kategori-buku.tambah');  // Pastikan kamu punya view untuk tambah
    }

    public function store(Request $request)
{
$kategori_buku = $request->kategori_buku;
return $kategori_buku;
}
}

