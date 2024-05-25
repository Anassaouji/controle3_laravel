<?php

namespace App\Http\Controllers\OneToOne;

use App\Http\Controllers\Controller;
use App\Models\OneToOne\Formateur;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function index()
    {
        $formateurs = Formateur::paginate(10);
        return view('OneToOne.formateurs.index', compact('formateurs'));
    }

    public function create()
    {
        return view('OneToOne.formateurs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Formateur::create($request->all());

        return redirect()->route('formateurs.index')->with('success', 'Formateur created successfully.');
    }

    public function show(Formateur $formateur)
    {
        return view('OneToOne.formateurs.show', compact('formateur'));
    }

    public function edit(Formateur $formateur)
    {
        return view('OneToOne.formateurs.edit', compact('formateur'));
    }

    public function update(Request $request, Formateur $formateur)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $formateur->update($request->all());

        return redirect()->route('formateurs.index')->with('success', 'Formateur updated successfully.');
    }

    public function destroy(Formateur $formateur)
    {
        $formateur->delete();

        return redirect()->route('formateurs.index')->with('success', 'Formateur deleted successfully.');
    }
}
