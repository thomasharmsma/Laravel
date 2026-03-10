<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    function index(): View {
    }

    function admin(): View{
    }

    {
        $participants = Participant::all();
        return view(view: 'participants', data: compact(var_name:"participants"));
    } 
    

    
}


function create(): View {
    return view(view: 'create_participant');
}



    

