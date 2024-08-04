<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $pet = Petugas::all();
        return view('petugas.index', compact('nomor', 'pet'));
    }

    public function create()
    {
        $des = Desa::all();
        return view('petugas.form', compact('des'));
    }

    public function store(Request $request)
    {
        $pet = new Petugas;
        $pet->nm_pet = $request->nm_pet;
        $pet->desas_id = $request->desa;
        $pet->save();

        return redirect('/petugas/');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $des = Desa::all();
        $pet = Petugas::find($id);
        return view('petugas.edit', compact('pet', 'des'));
    }

    public function update(Request $request, string $id)
    {
        $pet = Petugas::find($id);
        $pet->nm_pet = $request->nm_pet;
        $pet->desas_id = $request->desa;
        $pet->save();

        return redirect('/petugas/');
    }

    public function destroy(string $id)
    {
        $pet = Petugas::find($id);
        $pet->delete();

        return redirect('/petugas/');
    }
}
