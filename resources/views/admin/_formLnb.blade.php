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

<div class="input-group mb-3 form-group custom-selectd">

    <input type="text" name="situacao" {{-- id="exampleFormControlSelect1" --}} class="form-control" value="{{ isset($registro->situacao) ? $registro->situacao : '' }}" placeholder="Selecione">
    <select class="form-control" {{-- id="exampleFormControlSelect1" --}} name="situacao" placeholder="Selecione">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>

</div>

<div class="input-group mb-3">
    <input type="text" name="qtde" class="form-control" placeholder="Quantidade"
        value="{{ isset($registro->qtde) ? $registro->qtde : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>


