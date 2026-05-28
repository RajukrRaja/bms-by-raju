<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private function isApi(Request $request)
    {
        return $request->is('api/*') ||
            $request->wantsJson() ||
            $request->expectsJson() ||
            $request->header('Accept') === 'application/json';
    }

    public function addBookView()
    {
        return view('books.add-book');
    }

    public function addBook(Request $request)
    {
        $imageName = null;

        if ($request->hasFile('cover_image')) {

            $imageName = $request->file('cover_image')->store('books', 'public');
        }

        $book = Book::create([

            'title' => $request->title,

            'author' => $request->author,

            'cover_image' => $imageName,

            'price' => $request->price,

            'published_date' => $request->published_date

        ]);

        if ($this->isApi($request)) {

            return response()->json([

                'success' => true,

                'message' => 'Book added successfully',

                'data' => $book

            ], 201);
        }

        return redirect('/books');
    }

    public function getBooks(Request $request)
    {
        $search = $request->search;

        $books = Book::where('_deleted', 0)

            ->where('title', 'like', '%' . $search . '%')

            ->paginate(2);

        if ($this->isApi($request)) {

            return response()->json([

                'success' => true,

                'message' => 'Books fetched successfully',

                'data' => $books

            ]);
        }

        return view('books.books', compact('books'));
    }

    public function getSingleBook(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {

            if ($this->isApi($request)) {

                return response()->json([

                    'success' => false,

                    'message' => 'Book not found'

                ], 404);
            }

            abort(404);
        }

        if ($this->isApi($request)) {

            return response()->json([

                'success' => true,

                'message' => 'Book fetched successfully',

                'data' => $book

            ]);
        }

        return view('books.single-book', compact('book'));
    }

    public function updateBookView($id)
    {
        $book = Book::find($id);

        return view('books.update-book', compact('book'));
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {

            if ($this->isApi($request)) {

                return response()->json([

                    'success' => false,

                    'message' => 'Book not found'

                ], 404);
            }

            abort(404);
        }

        $imageName = $book->cover_image;

        if ($request->hasFile('cover_image')) {

            $imageName = $request->file('cover_image')->store('books', 'public');
        }

        $book->update([

            'title' => $request->title,

            'author' => $request->author,

            'cover_image' => $imageName,

            'price' => $request->price,

            'published_date' => $request->published_date

        ]);

        if ($this->isApi($request)) {

            return response()->json([

                'success' => true,

                'message' => 'Book updated successfully',

                'data' => $book

            ]);
        }

        return redirect('/books');
    }

    public function deleteBook(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {

            if ($this->isApi($request)) {

                return response()->json([

                    'success' => false,

                    'message' => 'Book not found'

                ], 404);
            }

            abort(404);
        }

        $book->_deleted = 1;

        $book->save();

        if ($this->isApi($request)) {

            return response()->json([

                'success' => true,

                'message' => 'Book deleted successfully'

            ]);
        }

        return redirect('/books');
    }
}