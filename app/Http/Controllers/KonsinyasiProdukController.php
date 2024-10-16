<?php

namespace App\Http\Controllers;

use App\Models\Konsinyasi;
use App\Models\KonsinyasiProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class KonsinyasiProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsinyasiproduk = KonsinyasiProduk::paginate(5);
        $konsinyasi = Konsinyasi::all();
        $produk = Produk::all();
        return view('page.konsinyasiproduk.index')->with([
            'konsinyasiproduk' => $konsinyasiproduk,
            'konsinyasi' => $konsinyasi,
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'id_konsinyasi' => $request->input('id_konsinyasi'),
            'id_produk' => $request->input('id_produk'),
            'stok' => $request->input('stok'),
            'tgl_konsinyasi' => $request->input('tgl_konsinyasi'),
        ];

        KonsinyasiProduk::create($data);

        return back()->with('message_create', 'Data Konsinyasi Produk Sudah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'id_konsinyasi' => $request->input('id_konsinyasi_edit'),
            'id_produk' => $request->input('id_produk_edit'),
            'stok' => $request->input('stok'),
            'tgl_produk' => $request->input('tgl_produk'),
        ];

        $datas = KonsinyasiProduk::findOrFail($id);
        $datas->update($data);

        return back()->with('message_create', 'Data Konsinyasi Produk Sudah ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = KonsinyasiProduk::findOrFail($id);
        $data->delete();
        return back()->with('message_delete','Data Konsinyasi Produk Sudah dihapus');
    }
}
