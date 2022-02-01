<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AppController extends Controller
{
    public function headline(){
        $books = book::all(); //sama dengan fetchAll
        return view ('welcome', compact('books'));
    }
}
