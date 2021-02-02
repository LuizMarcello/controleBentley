<div class="row">
    <div class="form-group col-md-7">
        <label for="">
            <h6>
                <p>Nome/Razão Social</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="nome"
            value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>CNPJ/CPF</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="cnpj"
            value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Email</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="email"
            value="{{ isset($registro->email) ? $registro->email : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-5">
        <label for="">
            <h6>
                <p>Endereço</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="endereco"
            value="{{ isset($registro->endereco) ? $registro->endereco : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Bairro</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="bairro"
            value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>CEP</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="cep"
            value="{{ isset($registro->cep) ? $registro->cep : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Data Cadastro</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="dataCadastro"
            value="{{ isset($registro->dataCadastro) ? $registro->dataCadastro : '' }}" disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Municipio</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="cidade"
            value="{{ isset($registro->cidade) ? $registro->cidade : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Telefone</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="telefone"
            value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Celular</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="celular"
            value="{{ isset($registro->celular) ? $registro->celular : '' }}">
    </div>

    <div class="form-group col-md-1">
        <label for="">
            <h6>
                <p>UF</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="estado"
            value="{{ isset($registro->estado) ? $registro->estado : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>IE</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="ie"
            value="{{ isset($registro->ie) ? $registro->ie : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>UF IE</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="ufie"
            value="{{ isset($registro->ufie) ? $registro->ufie : '' }}">
    </div>
</div>

<br>

<div class="row">
    <div class="form-group col-md-3 custom-selectd">
        <label for="distr">
            <h6>
                <p>Distribuidor</p>
            </h6>
        </label>
        <input type="text" readonly="true" id="distr" name="distribuidor" class="form-control"
            value="{{ isset($registro->distribuidor) ? $registro->distribuidor : '' }}">
    </div>

    <div class="form-group col-md-2 custom-selectd">
        <label for="design">
            <h6>
                <p>Designação</p>
            </h6>
        </label>
        <input type="text" readonly="true" id="design" name="designacao" class="form-control"
            value="{{ isset($registro->designacao) ? $registro->designacao : '' }}">
    </div>



    <br>


    <div class="form-group col-md-3 custom-selectd">
        <label for="">
            <h6>
                <p>Instalador</p>
            </h6>
        </label>
        <input type="text" readonly="true" readonly="true" name="instalador" class="form-control"
            value="{{ isset($registro->instalador) ? $registro->instalador : '' }}">
        <br>
    </div>

    <div class="form-group col-md-4 custom-selectd">
        <label for="">
            <h6>
                <p>Situação/Status</p>
            </h6>
        </label>
        <input type="text" readonly="true" name="situacao" class="form-control"
            value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3 custom-selectd">
        <label for="">
            <h6>
                <p>Plano</p>
            </h6>
        </label>
        <input type="text" readonly="true" name="plano" class="form-control"
            value="{{ isset($registro->plano) ? $registro->plano : '' }}">
    </div>
</div>
