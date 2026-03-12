<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class PageController extends Controller
{
    public function index()
    {
        $participants = Participant::all();
        return view('welcome', compact('participants'));
    }

    function admin()
    {
        return view("admin");
    }
}
?>