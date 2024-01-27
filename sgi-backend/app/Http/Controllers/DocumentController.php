<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Documents::all();
        return response()->json(['documents' => $documents], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'documentBacV' => 'required|file|mimes:pdf|max:10240', 
            'documentBacR' => 'required|file|mimes:pdf|max:10240', 
            'documentDiplome' => 'required|file|mimes:pdf|max:10240', 
            'documentCINV' => 'required|file|mimes:pdf|max:10240', 
            'documentCINR' => 'required|file|mimes:pdf|max:10240', 
            'documentRelvetNoteBac' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS1' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS2' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS3' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS4' => 'required|file|mimes:pdf|max:10240', 
            'photo' => 'required|file|mimes:pdf|max:10240', 
            'demandeManuscript' => 'required|file|mimes:pdf|max:10240', 
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $document = new Documents();
        $document->user_id = $user->id;

        $documentBacVPath = $request->file('documentBacV')->store('documents');
        $documentBacRPath = $request->file('documentBacR')->store('documents');
        $documentDiplomePath = $request->file('documentDiplome')->store('documents');
        $documentCINVPath = $request->file('documentCINV')->store('documents');
        $documentCINRPath = $request->file('documentCINR')->store('documents');
        $documentRelvetNoteBacPath = $request->file('documentRelvetNoteBac')->store('documents');
        $documentRelNoteS1Path = $request->file('documentRelNoteS1')->store('documents');
        $documentRelNoteS2Path = $request->file('documentRelNoteS2')->store('documents');
        $documentRelNoteS3Path = $request->file('documentRelNoteS3')->store('documents');
        $documentRelNoteS4Path = $request->file('documentRelNoteS4')->store('documents');
        $photoPath = $request->file('photo')->store('documents');
        $demandeManuscriptPath = $request->file('demandeManuscript')->store('documents');

        $document->documentBacV = $documentBacVPath;
        $document->documentBacR =  $documentBacRPath;
        $document->documentDiplome =  $documentDiplomePath;
        $document->documentCINV = $documentCINVPath;
        $document->documentCINR = $documentCINRPath;
        $document->documentRelvetNoteBac = $documentRelvetNoteBacPath;
        $document->documentRelNoteS1 = $documentRelNoteS1Path;
        $document->documentRelNoteS2 = $documentRelNoteS2Path;
        $document->documentRelNoteS3 = $documentRelNoteS3Path;
        $document->documentRelNoteS4 = $documentRelNoteS4Path;
        $document->photo = $photoPath;
        $document->demandeManuscript = $demandeManuscriptPath;

        $document->save();

        return response()->json(['document' => $document], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $document = Documents::find($id);

        if (!$document) {
            return response()->json(['error' => 'Document not found'], 404);
        }

        return response()->json(['document' => $document], 200);
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
        $document = Documents::find($id);

        if (!$document) {
            return response()->json(['error' => 'Document not found'], 404);
        }

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'documentBacV' => 'required|file|mimes:pdf|max:10240', 
            'documentBacR' => 'required|file|mimes:pdf|max:10240', 
            'documentDiplome' => 'required|file|mimes:pdf|max:10240', 
            'documentCINV' => 'required|file|mimes:pdf|max:10240', 
            'documentCINR' => 'required|file|mimes:pdf|max:10240', 
            'documentRelvetNoteBac' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS1' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS2' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS3' => 'required|file|mimes:pdf|max:10240', 
            'documentRelNoteS4' => 'required|file|mimes:pdf|max:10240', 
            'photo' => 'required|file|mimes:pdf|max:10240', 
            'demandeManuscript' => 'required|file|mimes:pdf|max:10240', 
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $document->user_id = $user->id;

        if ($request->hasFile('documentBacV')) {
            Storage::delete($document->documentBacV); 

            $document->documentBacV = $request->file('documentBacV')->store('documents');
        }


        $document->save();

        return response()->json(['document' => $document], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Documents::find($id);

        if (!$document) {
            return response()->json(['error' => 'Document not found'], 404);
        }

        Storage::delete($document->documentBacV); // Delete the associated file

        $document->delete();

        return response()->json(['message' => 'Document deleted successfully'], 200);
    }
}
