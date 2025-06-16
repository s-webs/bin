<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index()
    {
        $terms = Term::query()->orderBy('created_at', 'desc')->get();
        return view('pages.terms.index', compact('terms'));
    }
}
