<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Models\Balita;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
    $bal = Balita::with(['petugas', 'desa'])->get();
    return view('balita.index', compact('nomor', 'bal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pet = Petugas::all();
        $des = Desa::all();
        return view('balita.form', compact('des','pet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'no_rekme' => 'required|string|max:255',
        'nm_pas' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'status' => 'required|string|max:50',
        'tgl_lahir' => 'required|date',
        'nm_ayah' => 'required|string|max:255',
        'umur_ayah' => 'required|integer',
        'nm_ibu' => 'required|string|max:255',
        'umur_ibu' => 'required|integer',
        'berat_lahir' => 'required|string|max:255',
        'status_imu' => 'required|string|max:50',
        'tgl_imu' => 'required|date',
        'suplemen' => 'required|string|max:50',
        'tgl_sup' => 'required|date',
        'perkem' => 'required|string|max:255',
        'petugas_id' => 'required|exists:petugas,id',
        'desas_id' => 'required|exists:desas,id',
    ]);

    $bal = new Balita();
    $bal->no_rekme = $request->no_rekme;
    $bal->nm_pas = $request->nm_pas;
    $bal->alamat = $request->alamat;
    $bal->status = $request->status;
    $bal->tgl_lahir = $request->tgl_lahir;
    $bal->nm_ayah = $request->nm_ayah;
    $bal->umur_ayah = $request->umur_ayah;
    $bal->nm_ibu = $request->nm_ibu;
    $bal->umur_ibu = $request->umur_ibu;
    $bal->berat_lahir = $request->berat_lahir;
    $bal->status_imu = $request->status_imu;
    $bal->tgl_imu = $request->tgl_imu;
    $bal->suplemen = $request->suplemen;
    $bal->tgl_sup = $request->tgl_sup;
    $bal->perkem = $request->perkem;
    $bal->petugas_id = $request->petugas_id;
    $bal->desas_id = $request->desas_id;

    $bal->save();

    return redirect('/balita/');
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
        $des = Desa::all();
        $pet = Petugas::all();
        $bal = Balita::find($id);
        return view('balita.edit',compact('bal','des','pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bal = Balita::find($id);
        $bal->no_rekme = $request->no_rekme;
        $bal->nm_pas = $request->nm_pas;
        $bal->alamat = $request->alamat;
        $bal->status = $request->status;
        $bal->tgl_lahir = $request->tgl_lahir;
        $bal->nm_ayah = $request->nm_ayah;
        $bal->umur_ayah = $request->umur_ayah;
        $bal->nm_ibu = $request->nm_ibu;
        $bal->umur_ibu = $request->umur_ibu;
        $bal->berat_lahir = $request->berat_lahir;
        $bal->status_imu = $request->status_imu;
        $bal->tgl_imu = $request->tgl_imu;
        $bal->suplemen = $request->suplemen;
        $bal->tgl_sup = $request->tgl_sup;
        $bal->perkem = $request->perkem;
        $bal->petugas_id = $request->petugas_id;
        $bal->desas_id = $request->desas_id;

        $bal->save();

        return redirect('/balita/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bal = Balita::find($id);
        $bal->delete();

        return redirect('/balita/');
    }
}
