<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Models\Kategori;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data barang dengan deskripsi kategori
        $rsetBarang = DB::table('barang')
            ->join('kategori', 'barang.kategori_id', '=', 'kategori.id')
            ->select('barang.*', 'kategori.deskripsi as kategori_deskripsi')
            ->get();

        return view('v_barang.index', compact('rsetBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $rsetKategori = Kategori::all(); // Mengambil semua kategori
    $aKategori = array(
        'blank' => 'Pilih Kategori',
        'M' => 'Barang Modal',
        'A' => 'Alat',
        'BHP' => 'Bahan Habis Pakai',
        'BTHP' => 'Bahan Tidak Habis Pakai'
    );

    return view('v_barang.create', compact('rsetKategori', 'aKategori'));
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'merk'              => 'required',
            'seri'              => 'required',
            'spesifikasi'       => 'required',
            'kategori_id'          => 'required',
        ]);


        //create post
        Barang::create([
            'merk'          => $request->merk,
            'seri'          => $request->seri,
            'spesifikasi'   => $request->spesifikasi,
            'stok'      => $request->stok,
            'kategori_id'      => $request->kategori_id,
        ]);

        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rsetBarang = Barang::find($id);

    // Mendapatkan data kategori untuk dropdown
    $aKategori = Kategori::pluck('deskripsi', 'id')->all();

    return view('v_barang.show', compact('rsetBarang', 'aKategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mendapatkan data barang yang akan diedit
    $rsetBarang = Barang::find($id);

    // Mendapatkan data kategori untuk dropdown
    $aKategori = Kategori::pluck('deskripsi', 'id')->all();

    return view('v_barang.edit', compact('rsetBarang', 'aKategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $this->validate($request, [
        'merk' => 'required',
        'seri' => 'required',
        'spesifikasi' => 'required',
        'kategori_id' => 'required',
    ]);

    $rsetBarang = Barang::find($id);
    $rsetBarang->update($request->all());

    return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diubah!']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (DB::table('barangmasuk')->where('barang_id', $id)->exists() || DB::table('barangkeluar')->where('barang_id', $id)->exists()) {
            return redirect()->route('barang.index')->with(['Gagal' => 'Gagal dihapus']);
        } else {
            $rsetBarang = Barang::find($id);
            $rsetBarang->delete();
            return redirect()->route('barang.index')->with(['Success' => 'Berhasil dihapus']);
        }
    }

    public function getCategories(): JsonResponse
    {
        $categories = Kategori::all(['id', 'deskripsi']);
        return response()->json($categories);
    }
}



    
