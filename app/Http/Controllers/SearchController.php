<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search() {
        return view('search');
    }

    public function autocomplete(Request $request) {
        $data = Libro::select('libNombre as name')->where('libNombre', 'like', "%{$request->input('query')}%")->get();
        return response()->json($data);
    }
}

