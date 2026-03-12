<?php

namespace App\Http\Controllers;

use App\Models\Participant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
{
    public function store(Request $request)
    {
        DB::table('gebruikers')->insert([
            'naam' => $request->naam,
            'email' => $request->email
        ]);

        return "Opgeslagen!";
    }
}
