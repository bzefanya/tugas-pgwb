<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $getproduk = produk::all();

        return view('produk', compact('getproduk'));
    }

    public function delete($id)
    {
        $post = produk::find($id);
        $post->delete();
        return redirect()->back();
    }
}
