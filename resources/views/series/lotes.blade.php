<x-layout title="Tabela de Inspeção de Cor">
    <form action="{{ route('series.teste') }}" method="post">
        @csrf
<div class="col">
    <label for="bc_batch" class="form-label">bc_batch</label>
    <div class="input-group">
        <select id="bc_batch" name="bc_batch" class="form-select">
            <option value="">Selecione</option>
            @foreach ($lotes as $id => $nome)
                <option value="{{ $id }}">{{ $nome }}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <ul class="dropdown-menu">
                @foreach ($lotes as $id => $nome)
                    <option value="{{ $id }}">{{ $nome }}</option>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</x-layout>