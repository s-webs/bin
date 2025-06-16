<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Strategy;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    public function index()
    {
        $strategies = Strategy::query()->orderBy('created_at', 'desc')->get();

        return view('pages.strategies.index', compact('strategies'));
    }

    public function show($slug)
    {
        $strategy = Strategy::query()->where('slug', $slug)->firstOrFail();

        return view('pages.strategies.show', compact('strategy'));
    }
}
