<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    function index(): View {
        $participants = Participant::all();
        return view('participants', compact("participants"));
    }

    function admin(): View {
        $participants = Participant::all();
        return view('participants', compact("participants"));
    }

    function create(): View {
        return view('create_participant');
    }

    public function store(Request $request)
    {
        Participant::create([
            'id' => $request->name,
            'name' => $request->email,
            'date_of_birth' => $request->age
        ]);
        return "Participant stored";
    }
}




    

