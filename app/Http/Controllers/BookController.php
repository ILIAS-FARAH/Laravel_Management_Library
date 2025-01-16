<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();

        return view("welcome", compact('book'));

    }
    public function create()
    {
        return view("admin_add_book");
    }
    // BookController.php

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|integer|between:1000,9999',
            'genre' => 'required|string', // Validate as string first
            'description' => 'required|string',
            'image_url' => 'required|url',
        ]);

        // Attempt to decode JSON to verify it's valid
        $genre = json_decode($validatedData['genre'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return redirect()->back()->withErrors(['genre' => 'The genre field must be a valid JSON string.']);
        }

        // Create and save the book
        $book = new Book();
        $book->title = $validatedData['title'];
        $book->author = $validatedData['author'];
        $book->publication_year = $validatedData['publication_year'];
        $book->genre = $genre;
        $book->description = $validatedData['description'];
        $book->image_url = $validatedData['image_url'];

        $book->save();

        return redirect()->route('home')->with('success', 'Book added successfully.');
    }


    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit_book', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_year' => 'required|integer|between:1000,9999',
            'genre' => 'required|string',  // Validate as string first
            'description' => 'required',
            'image_url' => 'required|url',
        ]);

        // Attempt to decode JSON to verify it's valid
        $genres = json_decode($validatedData['genre'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return redirect()->back()->withErrors(['genre' => 'The genre field must be a valid JSON string.']);
        }

        // Update the book
        $book->update([
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'publication_year' => $validatedData['publication_year'],
            'genre' => $genres,
            'description' => $validatedData['description'],
            'image_url' => $validatedData['image_url'],
        ]);

        return redirect()->route('home')->with('success', 'Book updated successfully!');
    }

    public function Management()
    {
        $book = Book::all();
        $book = Book::paginate(3);

        return view("manage_books", compact('book'));

    }

}
