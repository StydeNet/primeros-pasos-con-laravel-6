<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NoteController
{
    public function index()
    {
        $notes = Note::all();

        return view('notes', ['notes' => $notes]);
    }

    public function create()
    {
        return view('add-note');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3', Rule::unique('notes')],
            'content' => 'required',
        ]);

        Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('notes');
    }

    public function edit($id)
    {
        $note = Note::find($id);

        return view('edit-note', ['note' => $note]);
    }

    public function update(Note $note, Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', Rule::unique('notes')->ignore($note)],
            'content' => 'required',
        ]);

        $note->update($data);

        return redirect('/');
    }

    public function destroy($id)
    {
        $note = Note::find($id);

        $note->delete();

        return redirect('/');
    }
}
