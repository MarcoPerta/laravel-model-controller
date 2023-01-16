<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // 'select * from movies'
        $allMovies = Movie::all();

        //filtraggio elementi
        // $books_filtered = Book::where('title', 'Like', 'L%')->get();

        // $data = [
        //     'title' => 'lista libri',
        //     'books_all' => $all_books,
        //     'books_filtered' => $books_filtered
        // ];

        // dd($data);

        return view('welcome', compact('allMovies') );
    }
}

