<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $notes = Note::get();
        return view('index', ['notes' => $notes]);
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->title = $request->note_title;
        $note->description = $request->note_content;
        $note->save();
        return back()->with('store', true);
    }

    public function edit($id)
    {
        $edit_notes = Note::where('id', $id)->first();
        return view('edit', ['edit_notes' => $edit_notes]);
    }

    public function update_note(Request $request, $id)
    {
        $note = Note::where('id', $id)->first();
        $note->title = $request->note_title;
        $note->description = $request->note_content;
        $note->save();
        return back()->with('update_note', true);
    }

    public function delete($id)
    {
        $delete_note = Note::where('id', $id)->first();
        $delete_note->delete();
        return back()->with('delete', true);
    }
}
