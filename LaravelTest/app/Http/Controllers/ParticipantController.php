<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function create()
    {
        return view('create_participant');
    }

    public function store(Request $request)
    {
        Participant::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $participants = Participant::all();
        return view('participants', compact('participants'));
    }

    function edit($id)
    {
        $participant = Participant::find($id);
        return view('edit_participant', compact('participant'));
    }
    function update($id, Request $request) {
        $participant= Participant::find($id);
        $participant->update($request->all());
        return redirect("/participants");
    }
    function destroy($id) {
        $participant = Participant::find($id);
        $participant->delete();
        return redirect("/participants");
    }
}




    

