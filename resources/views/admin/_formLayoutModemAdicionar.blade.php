<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Data</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="created_at"
            value="{{ isset($registro->created_at) ? $registro->created_at : '' }}" disabled>
    </div>

    <div class="form-group col-md-3">
        <label for="notafiscal">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal" id="notafiscal" {{-- value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}"> --}}
            value="{{ old('notafiscal') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="datanota">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota" id="datanota" {{-- value="{{ isset($registro->datanota) ? $registro->datanota : '' }}"> --}}
            value="{{ old('datanota') }}">
    </div>
    
    <div class="form-group col-md-3">
        <label for="banda">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda" id="banda" {{-- value="{{ isset($registro->banda) ? $registro->banda : '' }}"> --}}
            value="{{ old('banda') }}">
    </div>
    </div>

<div class="row">
    <div class="form-group col-md-4">
        <label for="fabricante">
            <h6>
                <p>Fabricante</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="fabricante" id="fabricante" {{-- value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}"> --}}
            value="{{ old('fabricante') }}">
    </div>


    <div class="form-group col-md-3">
        <label for="modelo">
            <h6>
                <p>Modelo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo" id="modelo" {{-- value="{{ isset($registro->modelo) ? $registro->modelo : '' }}"> --}}
            value="{{ old('modelo') }}">
    </div>

    

    <div class="form-group col-md-3">
        <label for="serial">
            <h6>
                <p>Serial</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="serial" id="serial" {{-- value="{{ isset($registro->serial) ? $registro->serial : '' }}"> --}}
            value="{{ old('serial') }}">
    </div>

    <div class="form-group col-md-2">
        <label for="macaddress">
            <h6>
                <p>Mac Address</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="macaddress" id="macaddress" {{-- value="{{ isset($registro->macaddress) ? $registro->macaddress : '' }}"> --}}
            value="{{ old('macaddress') }}">
    </div>
</div>

{{-- <div class="row">

    <div class="form-group col-md-4">
        <label for="">
            <h6>
                <p>Situação</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="situacao"
            value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">
    </div>

</div> --}}
