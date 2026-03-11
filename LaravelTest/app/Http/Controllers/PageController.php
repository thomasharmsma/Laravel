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