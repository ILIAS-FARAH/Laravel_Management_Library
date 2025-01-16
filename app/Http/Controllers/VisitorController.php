<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "{$query}%")->get();
        $totalBooks = $books->count();
        $books = $books->take(10);
        return response()->json(['books' => $books, 'totalBooks' => $totalBooks]);
    }
    public function show(Book $book)
    {
        return view('book_details', compact('book'));
    }

}
