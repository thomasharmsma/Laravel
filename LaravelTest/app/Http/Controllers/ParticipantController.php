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
}



    

