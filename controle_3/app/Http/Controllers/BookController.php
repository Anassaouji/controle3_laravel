<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
    public function index()
    {
        // Logique pour afficher les livres selon le rôle de l'utilisateur
        if (auth()->user()->isAdmin() || auth()->user()->isManager()) {
            $books = Book::paginate(10);
        }else {
            // Gérer le cas où l'utilisateur n'a pas les autorisations nécessaires
            abort(403, 'Unauthorized action.');
        }

        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        // Logique pour afficher un livre
        return view('books.show', compact('book'));
    }

    public function create()

    {
        $users=User::all();
        // Logique pour afficher le formulaire de création de livre
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('books.create',compact('users'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        // Créer un nouveau livre
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        Book::create($validatedData);

        // Rediriger avec un message de succès
        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    public function edit(Book $book)
    {
        // Logique pour afficher le formulaire de modification de livre
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Mettre à jour les informations du livre
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        $book->update($validatedData);

        // Rediriger avec un message de succès
        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    public function destroy(Book $book)
    {
        // Supprimer le livre
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }
        $book->delete();

        // Rediriger avec un message de succès
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
