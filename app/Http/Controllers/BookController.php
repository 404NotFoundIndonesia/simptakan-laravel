<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Pagination;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    use Pagination;

    public function index(Request $request): View {
        return view('pages.catalogue.index', [
            'items' => Book::search($request->get('q'))->render($this->pageSize),
        ]);
    }
}
