<x-layout title="Tabela de Inspeção de Cor">
    <br><br>
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="container border">
            <div class="row mb-2">
                <div class="col">
                    <label for="color_nome"  class="form-label">color_nome</label>
                    <div class="input-group">
                        <select id="color_nome" name="color_nome" class="form-select" autofocus>
                            <option value="">Selecione</option>
                            @foreach ($cors as $id => $nome)
                                <option value="{{ $id }}">{{ $nome }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <ul class="dropdown-menu">
                                @foreach ($cors as $id => $nome)
                                    <option value="{{ $id }}">{{ $nome }}</option>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
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
                <div class="col">
                    <label for="vin" class="form-label">vin</label>
                    <input type="text" autofocus id="vin" name="vin" class="form-control" value="{{ old('vin') }}">
                </div>
                <div class="col">
                    <label for="model" class="form-label">model</label>
                    <div class="input-group">
                        <select id="model" name="model" class="form-select">
                            <option value="">Selecione</option>
                            @foreach ($modelos as $id => $nome)
                                <option value="{{ $id }}">{{ $nome }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <ul class="dropdown-menu">
                                @foreach ($modelos as $id => $nome)
                                    <option value="{{ $id }}">{{ $nome }}</option>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="part" class="form-label">part</label>
                    <div class="input-group">
                        <select id="part" name="part" class="form-select">
                            <option value="">Selecione</option>
                            @foreach ($partes as $id => $nome)
                                <option value="{{ $id }}">{{ $nome }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <ul class="dropdown-menu">
                                @foreach ($partes as $id => $nome)
                                    <option value="{{ $id }}">{{ $nome }}</option>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <label for="delta" class="form-label">Delta</label>
                        <div class="input-group">
                            <select id="delta" name="delta" class="form-select">
                                <option value="">Selecione</option>
                                @foreach ($deltas as $id => $nome)
                                    <option value="{{ $id }}">{{ $nome }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <ul class="dropdown-menu">
                                    @foreach ($deltas as $id => $nome)
                                        <li><a class="dropdown-item" href="#">{{ $nome }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <br>
        <div class="container border">
            <div class="row mb-3">
                <div class="col">
                    <label for="delta" class="form-label">Delta</label>
                    <div class="input-group">
                        <select id="delta" name="delta" class="form-select">
                            <option value="">Selecione</option>
                            @foreach ($deltas as $id => $nome)
                                <option value="{{ $id }}">{{ $nome }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <ul class="dropdown-menu">
                                @foreach ($deltas as $id => $nome)
                                    <li><a class="dropdown-item" href="#">{{ $nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="result_15" class="form-label">result_15</label>
                    <input type="text" autofocus id="result_15" name="result_15" class="form-control" value="{{ old('result_15') }}">
                </div>
                <div class="col">
                    <label for="result_25" class="form-label">result_25</label>
                    <input type="text" autofocus id="result_25" name="result_25" class="form-control" value="{{ old('result_25') }}">
                </div>
                <div class="col">
                    <label for="result_45" class="form-label">result_45</label>
                    <input type="text" autofocus id="result_45" name="result_45" class="form-control" value="{{ old('result_45') }}">
                </div>
                <div class="col">
                    <label for="result_75" class="form-label">result_75</label>
                    <input type="text" autofocus id="result_75" name="result_75" class="form-control" value="{{ old('result_75') }}">
                </div>
                <div class="col">
                    <label for="result_110" class="form-label">result_110</label>
                    <input type="text" autofocus id="result_110" name="result_110" class="form-control" value="{{ old('result_110') }}">
                </div>
            </div>
        </div>
        <br>
        <div class="container border">
            <div class="row mb-3">
                <div class="col">
                    <label for="delta" class="form-label">Delta</label>
                    <div class="input-group">
                        <select id="delta" name="delta" class="form-select">
                            <option value="">Selecione</option>
                            @foreach ($deltas as $id => $nome)
                                <option value="{{ $id }}">{{ $nome }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <ul class="dropdown-menu">
                                @foreach ($deltas as $id => $nome)
                                    <li><a class="dropdown-item" href="#">{{ $nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="result_15" class="form-label">result_15</label>
                    <input type="text" autofocus id="result_15" name="result_15" class="form-control" value="{{ old('result_15') }}">
                </div>
                <div class="col">
                    <label for="result_25" class="form-label">result_25</label>
                    <input type="text" autofocus id="result_25" name="result_25" class="form-control" value="{{ old('result_25') }}">
                </div>
                <div class="col">
                    <label for="result_45" class="form-label">result_45</label>
                    <input type="text" autofocus id="result_45" name="result_45" class="form-control" value="{{ old('result_45') }}">
                </div>
                <div class="col">
                    <label for="result_75" class="form-label">result_75</label>
                    <input type="text" autofocus id="result_75" name="result_75" class="form-control" value="{{ old('result_75') }}">
                </div>
                <div class="col">
                    <label for="result_110" class="form-label">result_110</label>
                    <input type="text" autofocus id="result_110" name="result_110" class="form-control" value="{{ old('result_110') }}">
                </div>
            </div>
        </div>
        <br>
        <div class="container border">
            <div class="row mb-3">
                <div class="col">
                    <label for="delta" class="form-label">Delta</label>
                    <div class="input-group">
                        <select id="delta" name="delta" class="form-select">
                            <option value="">Selecione</option>
                            @foreach ($deltas as $id => $nome)
                                <option value="{{ $id }}">{{ $nome }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <ul class="dropdown-menu">
                                @foreach ($deltas as $id => $nome)
                                    <li><a class="dropdown-item" href="#">{{ $nome }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="result_15" class="form-label">result_15</label>
                    <input type="text" autofocus id="result_15" name="result_15" class="form-control" value="{{ old('result_15') }}">
                </div>
                <div class="col">
                    <label for="result_25" class="form-label">result_25</label>
                    <input type="text" autofocus id="result_25" name="result_25" class="form-control" value="{{ old('result_25') }}">
                </div>
                <div class="col">
                    <label for="result_45" class="form-label">result_45</label>
                    <input type="text" autofocus id="result_45" name="result_45" class="form-control" value="{{ old('result_45') }}">
                </div>
                <div class="col">
                    <label for="result_75" class="form-label">result_75</label>
                    <input type="text" autofocus id="result_75" name="result_75" class="form-control" value="{{ old('result_75') }}">
                </div>
                <div class="col">
                    <label for="result_110" class="form-label">result_110</label>
                    <input type="text" autofocus id="result_110" name="result_110" class="form-control" value="{{ old('result_110') }}">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <a href="{{ route('series.store') }}" class="btn btn-primary">Voltar</a>
    </form>
</x-layout>
