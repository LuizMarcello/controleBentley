<div class="input-group mb-3">
    <input type="text" name="notafiscal" class="form-control" placeholder="Nota fiscal"
        value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}">
    {{-- <label for="">Nome</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="banda" class="form-control" placeholder="Banda"
        value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="serial" class="form-control" placeholder="Serial"
        value="{{ isset($registro->serial) ? $registro->serial : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="modelo" class="form-control" placeholder="Modelo"
        value="{{ isset($registro->modelo) ? $registro->modelo : '' }}">
    {{-- <label for="">Numero</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="fabricante" class="form-control" placeholder="Fabricante"
        value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}">
    {{-- <label for="">Rua</label> --}}
</div>


<div class="form-group custom-selectd">
    <label for="atual">
        <p>Situação atual</p>
    </label>

    <input type="text" readonly="true" name="situacao" id="atual" class="form-control"
        value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">

    <br>

    <label for="alterar">
        <p>Alterar situação</p>
    </label>

    <select class="form-control" name="situacao" id="alterar">
        <option>Estoque</option>
        <option>Cliente</option>
        <option>Defeito</option>
        <option>Devolvido</option>
    </select>
</div>


<div class="input-group mb-3">
    <input type="text" name="qtde" class="form-control" placeholder="Quantidade"
        value="{{ isset($registro->qtde) ? $registro->qtde : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>
