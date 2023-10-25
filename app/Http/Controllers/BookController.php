<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|max:255',
                'author' => 'required|max:255',
                'rating' => 'required|numeric|between:1,5',
                'review' => 'required',
            ]);


            $livro = Book::create([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'rating' => $request->input('rating'),
                'review' => $request->input('review'),
            ]);

            return response()->json(['success' => 'Livro adicionado com sucesso!', 'livro' => $livro], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function index()
    {
        try {
            $livros = Book::all();

            return response()->json($livros, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            $livro = Book::find($id);

            if ($livro) {
                return response()->json(['livro' => $livro], 200);
            } else {
                return response()->json(['error' => 'Livro não encontrado'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $livro = Book::find($id);

            if ($livro) {
                $request->validate([
                    'title' => 'required|max:255',
                    'author' => 'required|max:255',
                    'rating' => 'required|numeric|between:1,5',
                    'review' => 'required',
                ]);

                $livro->update([
                    'title' => $request->input('title'),
                    'author' => $request->input('author'),
                    'rating' => $request->input('rating'),
                    'review' => $request->input('review'),
                ]);

                return response()->json(['success' => 'Livro atualizado com sucesso!', 'livro' => $livro], 200);
            } else {
                return response()->json(['error' => 'Livro não encontrado'], 404);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        try {
            $livro = Book::find($id);

            if ($livro) {
                $livro->delete();
                return response()->json(['success' => 'Livro removido com sucesso!'], 200);
            } else {
                return response()->json(['error' => 'Livro não encontrado'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
