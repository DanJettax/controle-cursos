<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LotesController extends Controller
{
    public function index(Request $request)
    {
        $cors = Lote::all();
        return view('series.index')->with('lotes', $lotes);
    }

    public function create()
    {
        return view('lotes.create');
    }

    public function store(Request $request)
    {
        $lotes = new Lote();
        $lotes = $request->input('integer');
        $lotes->save();

        // Redirecionar para a página de listagem de Lotes ou fazer qualquer outra ação necessária

        // Exemplo de redirecionamento para a página de listagem de cores:
        return redirect()->route('lotes.index')->with('success', 'Lote inserido com sucesso.');
    }
}
