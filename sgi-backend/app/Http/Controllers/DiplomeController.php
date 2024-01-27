<?php

namespace App\Http\Controllers;

use App\Models\Diplomes;
use App\Models\User;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diplomes = Diplomes::all();
        return response()->json(['diplomes' => $diplomes], 200);
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
            'user_id' => 'required|exists:users,id',
            'Etablissement' => 'required|string',
            'Direction_provinciale' => 'required|string',
            'Promotion' => '',
            'type' => '',
            'Specialite' => 'string',
            'nb_annees' => '',
            'Moyene_s1' => '',
            'Moyene_s2' => '',
            'Moyene_s3' => '',
            'Moyene_s4' => '',
            'Moyene_generale' => '',
            'nb_mention' => '',
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $diplome = new Diplomes();
        $diplome->user_id = $user->id;
        $diplome->Etablissement = $request->input('Etablissement');
        $diplome->Direction_provinciale = $request->input('Direction_provinciale');
        $diplome->Promotion = $request->input('Promotion');
        $diplome->type = $request->input('type');
        $diplome->Specialite = $request->input('Specialite');
        $diplome->nb_annees = $request->input('nb_annees');
        $diplome->Moyene_s1 = $request->input('Moyene_s1');
        $diplome->Moyene_s2 = $request->input('Moyene_s2');
        $diplome->Moyene_s3 = $request->input('Moyene_s3');
        $diplome->Moyene_s4 = $request->input('Moyene_s4');
        $diplome->Moyene_generale = $request->input('Moyene_generale');
        $diplome->nb_mention = $request->input('nb_mention');

        $diplome->save();

        return response()->json(['diplome' => $diplome], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $diplome = Diplomes::find($id);

        if (!$diplome) {
            return response()->json(['error' => 'Diplome not found'], 404);
        }

        return response()->json(['diplome' => $diplome], 200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diplome = Diplomes::find($id);

        if (!$diplome) {
            return response()->json(['error' => 'Diplome not found'], 404);
        }

        $diplome->delete();

        return response()->json(['message' => 'Diplome deleted successfully'], 200);
    }
}
