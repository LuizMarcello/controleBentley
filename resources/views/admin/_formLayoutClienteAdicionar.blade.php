<div class="row">
    <div class="form-group col-md-7">
        <label for="nome">
            <h6>
                <p>Nome/Razão Social</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="nome" id="nome"
       {{--  value="{{ isset($registro->nome) ? $registro->nome : '' }}"> --}}
         value="{{ old('nome') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="cnpj">
            <h6>
                <p>CNPJ/CPF</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cnpj" id="cnpj"
        {{-- value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}"> --}}
        value="{{ old('cnpj') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="email">
            <h6>
                <p>Email</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="email" id="email"
            {{-- value="{{ isset($registro->email) ? $registro->email : '' }}"> --}}
            value="{{ old('email') }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-5">
        <label for="endereco">
            <h6>
                <p>Endereço</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="endereco" id="endereco"
            {{-- value="{{ isset($registro->endereco) ? $registro->endereco : '' }}"> --}}
            value="{{ old('endereco') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="bairro">
            <h6>
                <p>Bairro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="bairro" id="bairro"
           {{--  value="{{ isset($registro->bairro) ? $registro->bairro : '' }}"> --}}
            value="{{ old('bairro') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="cep">
            <h6>
                <p>CEP</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cep"
        {{-- value="{{ isset($registro->cep) ? $registro->cep : '' }}"> --}}
        value="{{ old('cep') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="dataCadastro">
            <h6>
                <p>Data Cadastro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="dataCadastro" id="dataCadastro"
            {{-- value="{{ isset($registro->dataCadastro) ? $registro->dataCadastro : '' }}" disabled> --}}
            value="{{ old('dataCadastro') }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="cidade">
            <h6>
                <p>Municipio</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cidade" id="cidade"
           {{--  value="{{ isset($registro->cidade) ? $registro->cidade : '' }}"> --}}
            value="{{ old('cidade') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="telefone">
            <h6>
                <p>Telefone</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="telefone" id="telefone"
           {{--  value="{{ isset($registro->telefone) ? $registro->telefone : '' }}"> --}}
            value="{{ old('telefone') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="celular">
            <h6>
                <p>Celular</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="celular"
           {{--  value="{{ isset($registro->celular) ? $registro->celular : '' }}"> --}}
            value="{{ old('celular') }}">
    </div>

    <div class="form-group col-md-1">
        <label for="estado">
            <h6>
                <p>UF</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="estado" id="estado"
            {{-- value="{{ isset($registro->estado) ? $registro->estado : '' }}"> --}}
            value="{{ old('estado') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="ie">
            <h6>
                <p>IE</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="ie" id="ie"
         {{-- value="{{ isset($registro->ie) ? $registro->ie : '' }}"> --}}
         value="{{ old('ie') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="ufie">
            <h6>
                <p>UF IE</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="ufie" id="ufie"
        {{-- value="{{ isset($registro->ufie) ? $registro->ufie : '' }}"> --}}
        value="{{ old('ufie') }}">
    </div>
</div>



















