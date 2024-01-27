<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users], 200);
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
            'nom_fr' => 'required|string',
            'prenom_fr' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'telephone' => 'required',
        ]);
        $user = User::create([
            'nom_fr' => $request->input('nom-fr'),
            'nom_ar' => $request->input('nom-ar'),
            'prenom_fr' => $request->input('prenom-fr'),
            'prenom_ar' => $request->input('prenom-ar'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'telephone' => $request->input('telephone'),
            'dateNaissance' => $request->input('date-naissance'), 
            'CodeMassar' => $request->input('code-massar'),
            'CIN' => $request->input('cin'),
            'adresse_fr' => $request->input('adresse-fr'),
            'adresse_ar' => $request->input('adresse-ar'),
        ]);

        return response()->json(['user' => $user], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['user' => $user], 200);
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
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $request->validate([
            'nom_fr' => 'required|string',
            'prenom_fr' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'telephone' => 'required',
        ]);

        $user->update([
            'nom_fr' => $request->input('nom-fr'),
            'nom_ar' => $request->input('nom-ar'),
            'prenom_fr' => $request->input('prenom-fr'),
            'prenom_ar' => $request->input('prenom-ar'),
            'telephone' => $request->input('telephone'),
            'dateNaissance' => $request->input('date-naissance'), 
            'CodeMassar' => $request->input('code-massar'),
            'CIN' => $request->input('cin'),
            'adresse_fr' => $request->input('adresse-fr'),
            'adresse_ar' => $request->input('adresse-ar'),
        ]);

        return response()->json(['user' => $user], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
    
}
