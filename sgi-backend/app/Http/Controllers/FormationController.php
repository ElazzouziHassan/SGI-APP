<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return response()->json(['formations' => $formations], 200);
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
        $request->validate([
            'Filiere' => 'required|string',
            'nb_etudiants' => 'required|integer',
            'duree' => 'required|integer',
            'date_debut' => 'required|date',
            'promotion' => 'required|string',
        ]);

        $formation = new Formation();
        $formation->Filiere = $request->input('Filiere');
        $formation->nb_etudiants = $request->input('nb_etudiants');
        $formation->duree = $request->input('duree');
        $formation->date_debut = $request->input('date_debut');
        $formation->promotion = $request->input('promotion');

        $formation->save();

        return response()->json(['formation' => $formation], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formation = Formation::find($id);

        if (!$formation) {
            return response()->json(['error' => 'Formation not found'], 404);
        }

        return response()->json(['formation' => $formation], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formation = Formation::find($id);

        if (!$formation) {
            return response()->json(['error' => 'Formation not found'], 404);
        }

        $request->validate([
            'Filiere' => 'required|string',
            'nb_etudiants' => 'required|integer',
            'duree' => 'required|integer',
            'date_debut' => 'required|date',
            'promotion' => 'required|string',
        ]);

        $formation->Filiere = $request->input('Filiere');
        $formation->nb_etudiants = $request->input('nb_etudiants');
        $formation->duree = $request->input('duree');
        $formation->date_debut = $request->input('date_debut');
        $formation->promotion = $request->input('promotion');

        $formation->save();

        return response()->json(['formation' => $formation], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formation = Formation::find($id);

        if (!$formation) {
            return response()->json(['error' => 'Formation not found'], 404);
        }

        $formation->delete();

        return response()->json(['message' => 'Formation deleted successfully'], 200);
    }
}
