<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    function index(): View 
    {
        $participants = Participant::all();
        return view('participants', compact('participants'));
    }
}

