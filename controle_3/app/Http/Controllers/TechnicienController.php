<?php

namespace App\Http\Controllers;

use App\Events\TechnicienCreated;
use App\Models\Technicien;
use Illuminate\Http\Request;

class TechnicienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('techniciens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:techniciens,email',
            'salaire' => 'required|integer|min:0|max:999999999999.99',
        ]);

        $technicien = Technicien::create($request->all());

        // Déclencher l'événement
        event(new TechnicienCreated($technicien));

        return redirect()->back()->with('message', 'Technicien créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technicien $technicien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technicien $technicien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technicien $technicien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technicien $technicien)
    {
        //
    }
}
