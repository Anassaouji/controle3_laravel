<?php

namespace App\Http\Controllers\OneToOne;

use App\Http\Controllers\Controller;
use App\Models\OneToOne\Formateur;
use App\Models\OneToOne\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('OneToOne.stagiaires.index', compact('stagiaires'));
    }

    public function show(Stagiaire $stagiaire)
    {
        return view('OneToOne.stagiaires.show', compact('stagiaire'));
    }
    
    public function create()
    {
        $formateurs = Formateur::all();
        return view('OneToOne.stagiaires.create', compact('formateurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'filiere' => 'required|string|max:255',
            'formateur_id' => 'required|exists:formateurs,id',
        ]);

        Stagiaire::create($request->all());

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire created successfully.');
    }



    public function edit(Stagiaire $stagiaire)
    {
        $formateurs = Formateur::all();
        return view('OneToOne.stagiaires.edit', compact('stagiaire', 'formateurs'));
    }

    public function update(Request $request, Stagiaire $stagiaire)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'filiere' => 'required|string|max:255',
            'formateur_id' => 'required|exists:formateurs,id',
        ]);

        $stagiaire->update($request->all());

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire updated successfully.');
    }

    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();

        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire deleted successfully.');
    }
}
