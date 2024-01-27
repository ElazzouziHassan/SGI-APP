<?php

namespace App\Http\Controllers;

use App\Models\Inscriptions;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscriptions::all();
        return response()->json(['inscriptions' => $inscriptions], 200);
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
            'formation_id' => 'required|exists:formations,id',
            'status' => 'required|boolean',
        ]);

        $inscription = new Inscriptions();
        $inscription->user_id = $request->input('user_id');
        $inscription->formation_id = $request->input('formation_id');
        $inscription->status = $request->input('status');

        $inscription->save();

        return response()->json(['inscription' => $inscription], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inscription = Inscriptions::find($id);

        if (!$inscription) {
            return response()->json(['error' => 'Inscription not found'], 404);
        }

        return response()->json(['inscription' => $inscription], 200);
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
        $inscription = Inscriptions::find($id);

        if (!$inscription) {
            return response()->json(['error' => 'Inscription not found'], 404);
        }

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'formation_id' => 'required|exists:formations,id',
            'status' => 'required|boolean',
        ]);

        $inscription->user_id = $request->input('user_id');
        $inscription->formation_id = $request->input('formation_id');
        $inscription->status = $request->input('status');

        $inscription->save();

        return response()->json(['inscription' => $inscription], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscription = Inscriptions::find($id);

        if (!$inscription) {
            return response()->json(['error' => 'Inscription not found'], 404);
        }

        $inscription->delete();

        return response()->json(['message' => 'Inscription deleted successfully'], 200);
    }
}
