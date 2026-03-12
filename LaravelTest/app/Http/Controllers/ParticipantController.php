<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function store(Request $request)
    {
        Participant::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back();
    }
}



    

