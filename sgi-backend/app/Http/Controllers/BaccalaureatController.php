<?php

namespace App\Http\Controllers;

use App\Models\Baccalaureats;
use App\Models\User;
use Illuminate\Http\Request;

class BaccalaureatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baccalaureats = Baccalaureats::all();
        return response()->json(['baccalaureats' => $baccalaureats], 200);
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
            'Session' => '',
            'Serie' => '',
            'Filiere' => 'string',
            'Mention' => '',
            'Moyene_generale' => '',
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $baccalaureat = new Baccalaureats();
        $baccalaureat->user_id = $user->id;
        $baccalaureat->Etablissement = $request->input('Etablissement');
        $baccalaureat->Direction_provinciale = $request->input('Direction_provinciale');
        $baccalaureat->Promotion = $request->input('Session');
        $baccalaureat->type = $request->input('Serie');
        $baccalaureat->Specialite = $request->input('Filiere');
        $baccalaureat->Specialite = $request->input('Mention');
        $baccalaureat->Moyene_generale = $request->input('Moyene_generale');

        $baccalaureat->save();

        return response()->json(['baccalaureat' => $baccalaureat], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $baccalaureat = Baccalaureats::find($id);

        if (!$baccalaureat) {
            return response()->json(['error' => 'Baccalaureat not found'], 404);
        }

        return response()->json(['baccalaureat' => $baccalaureat], 200);
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
        $baccalaureat = Baccalaureats::find($id);

        if (!$baccalaureat) {
            return response()->json(['error' => 'Baccalaureat not found'], 404);
        }

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'Etablissement' => 'required|string',
            'Direction_provinciale' => 'required|string',
            'Session' => '',
            'Serie' => '',
            'Filiere' => 'string',
            'Mention' => '',
            'Moyene_generale' => '',
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $baccalaureat->user_id = $user->id;
        $baccalaureat->Etablissement = $request->input('Etablissement');
        $baccalaureat->Direction_provinciale = $request->input('Direction_provinciale');
        $baccalaureat->Promotion = $request->input('Session');
        $baccalaureat->type = $request->input('Serie');
        $baccalaureat->Specialite = $request->input('Filiere');
        $baccalaureat->Specialite = $request->input('Mention');
        $baccalaureat->Moyene_generale = $request->input('Moyene_generale');

        $baccalaureat->save();

        return response()->json(['baccalaureat' => $baccalaureat], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $baccalaureat = Baccalaureats::find($id);

        if (!$baccalaureat) {
            return response()->json(['error' => 'Baccalaureat not found'], 404);
        }

        $baccalaureat->delete();

        return response()->json(['message' => 'Baccalaureat deleted successfully'], 200);
    }
}
