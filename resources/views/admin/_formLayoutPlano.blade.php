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
        <input type="text" class="form-control" name="banda"
            value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    </div>
    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>cir</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cir" value="{{ isset($registro->cir) ? $registro->cir : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Veloc máx Down</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocmaxdown"
            value="{{ isset($registro->velocmaxdown) ? $registro->velocmaxdown : '' }}">
    </div>
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Veloc máx Up</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocmaxup"
            value="{{ isset($registro->velocmaxup) ? $registro->velocmaxup : '' }}">
    </div>
    {{-- <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Equipamento</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="equipamento"
            value="{{ isset($registro->equipamento) ? $registro->equipamento : '' }}">
    </div> --}}
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Veloc mín Down</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocmindown"
            value="{{ isset($registro->velocmindown) ? $registro->velocmindown : '' }}">
    </div>
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Veloc mín Up</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocminup"
            value="{{ isset($registro->velocminup) ? $registro->velocminup : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Equipamento</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="equipamento"
            value="{{ isset($registro->equipamento) ? $registro->equipamento : '' }}">
    </div>
    <div class="form-group col-md-3 ">
        <label for="">
            <h6>
                <p>Valor de custo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="valordecusto"
            value="{{ isset($registro->valordecusto) ? $registro->valordecusto : '' }}">
    </div>
    <div class="form-group col-md-3 ">
        <label for="">
            <h6>
                <p>Valor mensal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="valormensal"
            value="{{ isset($registro->valormensal) ? $registro->valormensal : '' }}">
    </div>
</div>
