<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Cor;
use App\Models\Delta;
use App\Models\Episode;
use App\Models\Modelo;
use App\Models\Parte;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Series $request)
    {
        $deltas = Delta::pluck('nome', 'id');
        return view('series.create', compact('deltas'));

    }

    public function createModelo(Request $request)
    {
        $modelos = Modelo::pluck('modelo', 'id');
        return view('series.create', compact('modelos'));
    }

    public function createParte(Request $request)
    {
        $partes = Parte::pluck('parte', 'id');
        return view('series.create', compact('partes'));
    }


    public function store(SeriesFormRequest $request )    {

       $serie = Series::create($request->all());

        return to_route('series.index')
            ->with('mensagem.sucesso', "Análise '{$serie->id}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->id}' removida com sucesso");
    }

    public function edit(Series $series)
    {

        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }

}