<?php

namespace App\Http\Controllers;
use App\Models\Unit_Kerja;
use App\Models\Dokter; //tambahin ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_dokter = DB::table('dokter')->join('unit_kerja','dokter.unit_kerja_id','=','unit_kerja.id')
        ->select('dokter.*','unit_kerja.nama as nama_unit_kerja')
        ->get();

        $unit_kerja = Unit_Kerja::all();

// buat turunan model pasien
        return view('dokter.index',compact('data_dokter','unit_kerja'));
// kirim array data ke view paramedik index menggunakan assosiatif array
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
        $dokter = new Dokter();
        $dokter->nama = $request->nama;
        $dokter->gender = $request->gender;
        $dokter->tmp_lahir = $request->tmp_lahir;
        $dokter->tgl_lahir = $request->tgl_lahir;
        $dokter->telepon = $request->telepon;
        $dokter->alamat = $request->alamat;
        $dokter->unit_kerja_id = $request->unit_kerja_id;
        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = DB::table('dokter')->join('unit_kerja','dokter.unit_kerja_id','=','unit_kerja.id')
        ->select('dokter.*','unit_kerja.nama as nama_unit_kerja')->get();
        $data_dokter = $data->where('id',$id);
        return view('dokter.detail',compact('data_dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data_dokter = DB::table('dokter')->where('id',$id)->get();
        $unit_kerja = DB::table('unit_kerja')->get();
        return view('dokter.edit', compact('data_dokter','unit_kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $dokter = Dokter::find($request->id);
        $dokter->nama = $request->nama;
        $dokter->gender = $request->gender;
        $dokter->tmp_lahir = $request->tmp_lahir;
        $dokter->tgl_lahir = $request->tgl_lahir;
        $dokter->telepon = $request->telepon;
        $dokter->alamat = $request->alamat;
        $dokter->unit_kerja_id = $request->unit_kerja_id;
        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // kasih perintah hapus data
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
    
        return redirect()->back()->with('success', 'dokter berhasil dihapus.');
    }
}
