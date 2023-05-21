<br>
<x-layout title="Análise da Carroceria">
    <br>
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar nova Análise</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href=" {{ route('seasons.index', $serie->id) }}">
                {{ $serie->result_15 }}
                {{ $serie->result_25 }}
                {{ $serie->result_45 }}
                {{ $serie->result_75 }}
                {{ $serie->result_110 }}
            </a>
            <span class="d-flex">
                <form>
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                    Editar
                </a>
               </form>
            </span>
                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                    Excluir
                </button>
                </form>
           </span>
        </li>
        @endforeach
    </ul>
</x-layout>
