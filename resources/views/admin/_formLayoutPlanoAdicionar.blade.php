<div class="row">
    <div class="form-group col-md-7">
        <label for="nome">
            <h6>
                <p>Nome do plano</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="nome" id="nome"
        {{-- value="{{ isset($registro->nome) ? $registro->nome : '' }}"> --}}
         value="{{ old('nome') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="banda">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda"
         {{-- value="{{ isset($registro->banda) ? $registro->banda : '' }}"> --}}
          value="{{ old('banda') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="cir">
            <h6>
                <p>cir</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cir"
        {{-- value="{{ isset($registro->cir) ? $registro->cir : '' }}"> --}}
         value="{{ old('cir') }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="velocmaxdown">
            <h6>
                <p>Veloc máx Down</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocmaxdown" id="velocmaxdown"
         {{-- value="{{ isset($registro->velocmaxdown) ? $registro->velocmaxdown : '' }}"> --}}
            value="{{ old('velocmaxdown') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="velocmaxup">
            <h6>
                <p>Veloc máx Up</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocmaxup" id="velocmaxup"
        {{-- value="{{ isset($registro->velocmaxup) ? $registro->velocmaxup : '' }}"> --}}
            value="{{ old('velocmaxup') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="velocmindown">
            <h6>
                <p>Veloc mín Down</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocmindown" id="velocmindown"
        {{-- value="{{ isset($registro->velocmindown) ? $registro->velocmindown : '' }}"> --}}
            value="{{ old('velocmindown') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="velocminup">
            <h6>
                <p>Veloc mín Up</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="velocminup" id="velocminup"
        {{-- value="{{ isset($registro->velocminup) ? $registro->velocminup : '' }}"> --}}
            value="{{ old('velocminup') }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-3">
        <label for="equipamento">
            <h6>
                <p>Equipamento</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="equipamento" id="equipamento"
        {{-- value="{{ isset($registro->equipamento) ? $registro->equipamento : '' }}"> --}}
            value="{{ old('equipamento') }}">
    </div>

    <div class="form-group col-md-3 ">
        <label for="valordecusto">
            <h6>
                <p>Valor de custo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="valordecusto" id="valordecusto"
         {{-- value="{{ isset($registro->valordecusto) ? $registro->valordecusto : '' }}"> --}}
            value="{{ old('valordecusto') }}">
    </div>

    <div class="form-group col-md-3 ">
        <label for="valormensal">
            <h6>
                <p>Valor mensal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="valormensal" id="valormensal"
         {{-- value="{{ isset($registro->valormensal) ? $registro->valormensal : '' }}"> --}}
            value="{{ old('valormensal') }}">
    </div>
</div>
