<div class="input-group mb-3">
    <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    {{-- <label for="">Nome</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="rua" class="form-control" placeholder="Rua" value="{{ isset($registro->rua) ? $registro->rua : '' }}">
    {{-- <label for="">Rua</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="numero" class="form-control" placeholder="Número" value="{{ isset($registro->numero) ? $registro->numero : '' }}">
    {{-- <label for="">Numero</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
    {{-- <label for="">Bairro</label> --}}
</div>

<div class="input-group mb-3">
    <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="{{ isset($registro->cidade) ? $registro->cidade : '' }}">
    {{-- <label for="">Cidade</label> --}}
</div>

<div class="input-group mb-3">

    <input type="text" name="estado" class="form-control" placeholder="Estado" value="{{ isset($registro->estado) ? $registro->estado : '' }}">
    {{-- <label for="">Estado</label> --}}
</div>

{{-- <div class="input-group mb-3">
    <input type="text" name="ativo" class="form-control" placeholder="Ativo" value="{{ isset($registro->ativo) ? $registro->ativo : '' }}">
    <label for="">Ativo</label>
</div> --}}

<div>
    <input  type="checkbox" id="flexCheckChecked" checked {{ isset($registro->ativo) && $registro->ativo == 'sim' ? 'checked' : '' }}  value="true">
    <label  for="flexCheckChecked">
      Cliente Ativo?
    </label>
    <br><br>
</div>