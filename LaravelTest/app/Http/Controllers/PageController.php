<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(): View {
    }

    function admin(): View{
    }

    function participants(): View{
        participants = Participant::all();
        return view('participants', ['participants' => $participants]);
    } 
    

    
}
