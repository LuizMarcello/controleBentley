<div class="row">
    <div class="form-group col-md-7">
        <label for="">
            <h6>
                <p>Nome do plano</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cnpj" value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>cir</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="email"
            value="{{ isset($registro->cir) ? $registro->cir : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-5">
        <label for="">
            <h6>
                <p>Veloc máx Down</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="endereco"
            value="{{ isset($registro->velocmaxdown) ? $registro->velocmaxdown : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Veloc máx Up</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cep" value="{{ isset($registro->velocmaxup) ? $registro->velocmaxup : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Equipamento</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="bairro"
            value="{{ isset($registro->equipamento) ? $registro->equipamento : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Veloc mín Down</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cep" value="{{ isset($registro->velocmindown) ? $registro->velocmindown : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Veloc mín Up</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cep" value="{{ isset($registro->velocminup) ? $registro->velocminup : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Valor</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cidade"
            value="{{ isset($registro->valor) ? $registro->valor : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Valor mensal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="telefone"
            value="{{ isset($registro->valormensal) ? $registro->valormensal : '' }}">
    </div>

</div>

<br>


















