<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $des = Desa::all();
        return view('desa.index',compact('nomor','des'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('desa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $des = new Desa;
        $des->nm_des = $request->nm_des;
        $des->kpl_des = $request->kpl_des;
        $des->save();

        return redirect('/desa/');
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
        $des = Desa::find($id);
        return view('desa.edit',compact('des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $des = Desa::find($id);
        $des->nm_des = $request->nm_des;
        $des->kpl_des = $request->kpl_des;
        $des->save();

        return redirect('/desa/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $des = Desa::find($id);
        $des->delete();

        return redirect('/desa/');
    }
}
