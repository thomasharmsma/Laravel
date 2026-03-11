<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Book;

class PageController extends Controller
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
<<<<<<< HEAD
=======

>>>>>>> e55f44f7eb43d37d3382d7db1baff1d768dea3d9
