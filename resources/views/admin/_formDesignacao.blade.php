<div class="input-group mb-3">
    <input type="text" name="notafiscal" class="form-control" placeholder="Nota fiscal" value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}">
    {{-- <label for="">Nome</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="modeloModem" class="form-control" placeholder="Modelo do modem" value="{{ isset($registro->modeloModem) ? $registro->modeloModem : '' }}">
    {{-- <label for="">Nome</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="serialModem" class="form-control" placeholder="Serial do modem" value="{{ isset($registro->serialModem) ? $registro->serialModem : '' }}">
    {{-- <label for="">Rua</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="bandaModem" class="form-control" placeholder="Banda do modem" value="{{ isset($registro->bandaModem) ? $registro->bandaModem : '' }}">
    {{-- <label for="">Numero</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="modeloNlb" class="form-control" placeholder="Modelo do Lnb" value="{{ isset($registro->modeloNlb) ? $registro->modeloNlb : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="serialNlb" class="form-control" placeholder="Serial do Lnb" value="{{ isset($registro->serialNlb) ? $registro->serialNlb : '' }}">
    {{-- <label for="">Cidade</label> --}}
</div>

<div class="input-group mb-3">

    <input type="text" name="modeloAntena" class="form-control" placeholder="Modelo da antena" value="{{ isset($registro->modeloAntena) ? $registro->modeloAnt : '' }}">
    {{-- <label for="">Estado</label> --}}
</div>




