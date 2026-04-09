<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use Illuminate\Http\Request;

class MatchController extends Controller 
{ 

public function create()
    {
        return view('create-wedstrijden');
    }

    public function store(Request $request)
    {   
        $request->validate([
        'name' => 'required|min:10',
        'date' => 'required|date',
        'location' => 'required|string',
        'deelnemers' => 'required|integer|min:0'
          ]);


        Competition::create([
            'name' => $request->name,
            'date' => $request->date,
            'location' => $request->location,
            'deelnemers' => $request->deelnemers
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $wedstrijden = Competition::all();
        return view('wedstrijden', compact('wedstrijden'));
    }

    
    function edit($id)
    {
        $wedstrijden = Competition::find($id);
        return view('edit-wedstrijden', compact('wedstrijden'));
    }
    

     public function update(Request $request, $id){
        $wedstrijden= Competition::find($id);
        $wedstrijden->update($request->all());
        return redirect("/wedstrijden");
    }




    function destroy($id) {
        $wedstrijd = Competition::find($id);
        $wedstrijd->delete();
        return redirect("/wedstrijden");
    }
}



