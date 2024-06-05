<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan; //tambahin ini
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kelurahan = Kelurahan::all();
// buat turunan model kelurahan
        return view('kelurahan.index', ['data_kelurahan'=>$data_kelurahan]);
// kirim array data ke view kelurahan index menggunakan assosiatif array
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
        $kelurahan = new Kelurahan();
        $kelurahan->nama = $request->nama;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->save();
        return redirect('kelurahan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //buat perintah detail
        $data_kelurahan = Kelurahan::all();
        return view('kelurahan.index', ['data_kelurahan'=>$data_kelurahan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat perintah update
        $kelurahan = Kelurahan::find($request->id);
        $kelurahan->nama = $request->nama;
        $kelurahan->kecamatan = $request->kecamatan;
        $kelurahan->save();
        return redirect('kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // kasih perintah hapus data
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();
    
        return redirect()->back()->with('success', 'kelurahan berhasil dihapus.');
    }
}
