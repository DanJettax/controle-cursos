<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Cor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorsController extends Controller
{
    public function index(Request $request)
    {
        $cors = Cor::all();
        return view('series.index')->with('cors', $cors);
    }

    public function create(SeriesFormRequest $request)
    {

        $cors = Cor::pluck('nome', 'id');
        return view('series.create', compact('cors'));
    }
}




}

