<?php

namespace App\Http\Controllers;

use App\Models\Participant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
{
    function index()
    {
        $book = Book::first();
        return view("test", compact("book"));
    }

    function admin()
    {
        return view("admin");
    }
<<<<<<< HEAD
    
   
}
=======
}
?>
>>>>>>> e52e02e2eb0891edea84fec08770382216cd062d
