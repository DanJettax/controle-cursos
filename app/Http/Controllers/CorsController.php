<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use App\Models\Delta;
use Illuminate\Http\Request;

class CorsController extends Controller
{
    public function index(Request $request)
    {
        $cors = Cor::all();
        return view('series.index')->with('cors', $cors);
    }

    public function create(Request $request)
    {
        $cors = Cor::all();
        return view('series.cor', compact('cors'));
    }
}

