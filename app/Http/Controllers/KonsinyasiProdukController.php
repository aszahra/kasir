<?php

namespace App\Http\Controllers;

use App\Models\Konsinyasi;
use App\Models\Konsinyasi_Produk;
use Illuminate\Http\Request;

class KonsinyasiProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsinyasi_produk = Konsinyasi_Produk::paginate(5);
        return view('page.konsinyasiProduk.index')->with([
            'konsinyasi_produk' => $konsinyasi_produk,
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
            'konsinyasi_produk' => $request->input('konsinyasi_produk'),
        ];

        Konsinyasi_Produk::create($data);

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
            'konsinyasi' => $request->input('konsinyasi'),
        ];

        $datas = Konsinyasi::findOrFail($id);
        $datas->update($data);

        return back()->with('message_create', 'Data Konsinyasi Sudah ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
