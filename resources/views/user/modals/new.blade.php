<div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST" action="/users">
            @csrf
            <div class="modal-content" style="width:80%; margin:auto">
                <div class="modal-header">
                    <h5 class="modal-title" id="newUserModalLabel">Registar Utilizador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Nome') }}<span
                                class="red" style="margin-right: -0.5rem">*</span></label>
                        <div class="col-sm-7">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="nome" value="{{ old('name') }}" maxlength="80" autofocus required>

                            @error('name')
                            {{-- <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> --}}
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}<span
                                class="red" style="margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-7">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" maxlength="80" required>

                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>

                            {{-- <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> --}}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                            class="col-sm-4 col-form-label text-md-right">{{ __('Palavra-passe') }}<span class="red"
                                style="margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-7">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation"
                            class="col-sm-4 col-form-label text-md-right">{{ __('Confirmar Palavra-passe') }}<span
                                class="red" style="margin-right: -0.5rem">*</span></label>

                        <div class="col-sm-7">
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registar') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>