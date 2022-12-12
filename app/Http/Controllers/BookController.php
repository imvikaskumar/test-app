<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\IssueBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $books = '';
        if ($request->isMethod("POST")) {
            $searchInput = $request->search ?? NULL;
            $books = Book::active()->ofSearchInput($searchInput)->get();

        }else{
            $books = Book::active()->get();
        }
        return view("books.books", compact('books'));
    }

    public function issueBook($bookID)
    {
        try {
            $issueBook = new IssueBook();
            $issueBook->book_id = $bookID;
            $issueBook->assigned_user_id = auth()->user()->id;
            $issueBook->assigned_datetime = Carbon::now();
            $issueBook->save();

            $book = Book::findOrFail($bookID);
            $book->is_available = 0;
            $book->save();
            return back();

        } catch (\Throwable $th) {
            dd($th);
        }

    }
}