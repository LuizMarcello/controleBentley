<div class="input-group mb-3">
    <input type="text" name="banda" class="form-control" placeholder="Banda do modem" value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    {{-- <label for="">Nome</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="marca" class="form-control" placeholder="Marca do modem" value="{{ isset($registro->marca) ? $registro->marca : '' }}">
    {{-- <label for="">Rua</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="modelo" class="form-control" placeholder="Modelo do modem" value="{{ isset($registro->modelo) ? $registro->modelo : '' }}">
    {{-- <label for="">Numero</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="serial" class="form-control" placeholder="Serial do modem" value="{{ isset($registro->serial) ? $registro->serial : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>






