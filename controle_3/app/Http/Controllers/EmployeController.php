<?php

namespace App\Http\Controllers;

use App\Events\EmployeeCreated;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes=Employe::all();
        return view('employes.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'age' => 'required|integer|max:255',
            'salaire' => 'required|integer|min:0|max:999999999999.99',
        ]);
        $employee = Employe::create($request->all());

        // Déclencher l'événement
        event(new EmployeeCreated($employee));

        return redirect()->route('employe.index')->with('message', 'Employé créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
