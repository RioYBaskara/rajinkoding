<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ApiKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Kategoris = Kategori::all();
        return response()->json(['data' => $Kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);

        if (is_null($kategori)) {
            return response()->json(['message' => 'Kategori not found'], 404);
        }

        return response()->json(['data' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
