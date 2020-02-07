<div class="modal fade" id="newAtividadeModal" tabindex="-1" role="dialog" aria-labelledby="newAtividadeModalLabel"
    data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST" action="/atividade">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newAtividadeModalLabel">Adicionar Atividade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label text-md-right">{{ __('Atividade') }}<span
                                class="red" style="margin-right: -0.5rem">*</span></label>
                        <div class="col-sm-10">
                            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" value="{{ old('nome') }}" placeholder="Descreva a atividade" maxlength="80"
                                autofocus required>

                            @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_local" class="col-sm-2 col-form-label text-md-right">{{ __('Local') }}<span
                                class="red" style="margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-10">
                            <select class="form-control selectpicker" id="new_local" name="new_local"
                                data-live-search="true" title="Selecione um local" required>
                                @foreach ($local as $local)
                                <option value="{{ $local->id }}">{{ $local->nome }}</option>
                                @endforeach
                            </select>

                            @error('new_local')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inicio" class="col-sm-2 col-form-label text-md-right">{{ __('Início') }}<span
                                class="red" style="margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-10">
                            <input type="datetime-local" id="inicio" name="inicio"
                                class="form-control @error('inicio') is-invalid @enderror" required>

                            @error('inicio')
                            <div class=" invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fim" class="col-sm-2 col-form-label text-md-right">{{ __('Fim') }}<span class="red"
                                style="visibility: hidden; margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-10">
                            <input type="datetime-local" id="fim" name="fim"
                                class="form-control @error('fim') is-invalid @enderror">

                            @error('fim')
                            <div class=" invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="total_espectadores"
                            class="col-sm-2 col-form-label text-md-right">{{ __('Espectadores') }}<span class="red"
                                style="margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-2">
                            <input id="total_espectadores" type="number" min="0"
                                class="form-control @error('total_espectadores') is-invalid @enderror"
                                name="total_espectadores" value="{{ old('total_espectadores') }}" placeholder="Total"
                                required>

                            @error('total_espectadores')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-sm-8">
                            <input id="outros_espectadores" type="text"
                                class="form-control @error('outros_espectadores') is-invalid @enderror"
                                name="outros_espectadores" value="{{ old('outros_espectadores') }}"
                                placeholder="Indique outros possíveis espectadores" maxlength="80">

                            @error('outros_espectadores')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_turma" class="col-sm-2 col-form-label text-md-right">{{ __('Turmas') }}<span
                                class="red" style="visibility: hidden; margin-right: -0.5rem">*</span></label>
                        <div class="col-sm-10">
                            <select class="form-control selectpicker" id="new_turma" name="new_turma[]"
                                title="Selecione uma ou mais turmas" multiple data-live-search="true">
                                @foreach ($turma as $turma)
                                <option value="{{ $turma->id }}"> {{ $turma->nome }}</option>
                                @endforeach
                            </select>

                            @error('new_turma')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_professor"
                            class="col-sm-2 col-form-label text-md-right">{{ __('Professores') }}<span class="red"
                                style="visibility: hidden; margin-right: -0.5rem">*</span></label>
                        <div class="col-sm-10">
                            <select class="form-control selectpicker" id="new_professor" name="new_professor[]"
                                title="Selecione um ou mais professores" multiple data-live-search="true">
                                @foreach ($professor as $professor)
                                <option value="{{ $professor->id }}"> {{ $professor->nome }}</option>
                                @endforeach
                            </select>

                            @error('new_professor')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_recurso" class="col-sm-2 col-form-label text-md-right">{{ __('Recursos') }}<span
                                class="red" style="visibility: hidden; margin-right: -0.5rem">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control selectpicker" id="new_recurso" name="new_recurso"
                                title="Selecione um recurso" data-live-search="true">
                                @foreach ($recurso as $recurso)
                                <option value="{{ $recurso->id }}"> {{ $recurso->nome }}</option>
                                @endforeach
                            </select>

                            @error('new_recurso')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-sm-2">
                            <input id="quantidade_necessaria" type="number" min="0"
                                class="form-control @error('quantidade_necessaria') is-invalid @enderror"
                                name="quantidade_necessaria" value="{{ old('quantidade_necessaria') }}"
                                placeholder="Total">

                            @error('quantidade_necessaria')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="observacao"
                            class="col-sm-2 col-form-label text-md-right">{{ __('Observações') }}<span class="red"
                                style="visibility: hidden; margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-10">
                            <textarea id="observacao" class="form-control @error('observacao') is-invalid @enderror"
                                name="observacao" placeholder="Indique possíveis observações"
                                rows="1">{{ old('observacao') }}</textarea>

                            @error('observacao')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Adicionar') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>