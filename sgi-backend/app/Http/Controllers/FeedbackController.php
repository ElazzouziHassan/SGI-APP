<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return response()->json(['feedbacks' => $feedbacks], 200);
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
            'content' => 'required|string',
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $feedback = new Feedback();
        $feedback->user_id = $user->id;
        $feedback->content = $request->input('content');

        $feedback->save();

        return response()->json(['feedback' => $feedback], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        return response()->json(['feedback' => $feedback], 200);
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
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        $user = User::find($request->input('user_id'));

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $feedback->user_id = $user->id;
        $feedback->content = $request->input('content');

        $feedback->save();

        return response()->json(['feedback' => $feedback], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }

        $feedback->delete();

        return response()->json(['message' => 'Feedback deleted successfully'], 200);
    }
}
