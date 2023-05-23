
<x-layout title="">

@section('content')
    <div class="container">
        <h1>Inserir Nova Cor</h1>

        <form action="{{ route('cors.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Inserir</button>

            <a href="{{ route('series.store') }}" class="btn btn-primary">Voltar</a>
        </form>
    </div>
</x-layout>
