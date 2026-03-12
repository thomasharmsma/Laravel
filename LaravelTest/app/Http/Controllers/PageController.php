<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Book;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pagecontroller extends Controller
=======
class PageController extends Controller
>>>>>>> 66e262b42f1d59ab702b64a3fbf74c4a22e3ed8e
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
}