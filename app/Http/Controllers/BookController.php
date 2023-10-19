<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'rating' => 'required|numeric|between:1,5',
            'review' => 'required',
            'date_added' => 'required',
        ]);

        $livro = Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),
            'date_added' => $request->input('date_added'),
        ]);

        return redirect('/livros')->with('success', 'Livro adicionado com sucesso!');
    }

    public function index()
    {
    }

    public function show($id)
    {
    }

    public function update($id)
    {
    }

    public function delete($id)
    {
    }
}
