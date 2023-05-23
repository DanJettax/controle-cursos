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

    public function create()
    {
        return view('cors.create');
    }

    public function store(Request $request)
    {
        $cor = new Cor();
        $cor->nome = $request->input('nome');
        $cor->save();

        // Redirecionar para a página de listagem de cores ou fazer qualquer outra ação necessária

        // Exemplo de redirecionamento para a página de listagem de cores:
        return redirect()->route('cors.index')->with('success', 'Cor inserida com sucesso.');
    }


}






