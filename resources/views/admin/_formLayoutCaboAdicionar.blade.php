<div class="row">
    <div class="form-group col-md-5">
        <label for="notafiscal">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal" id="notafiscal"
        {{-- value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}"> --}}
         value="{{ old('notafiscal') }}">
    </div>

    <div class="form-group col-md-4">
        <label for="datanota">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota" id="datanota"
         {{-- value="{{ isset($registro->datanota) ? $registro->datanota : '' }}"> --}}
          value="{{ old('datanota') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="tipodecabo">
            <h6>
                <p>Tipo de cabo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="tipodecabo" id="tipodecabo"
        {{-- value="{{ isset($registro->tipodecabo) ? $registro->tipodecabo : '' }}"> --}}
         value="{{ old('tipodecabo') }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="fabricante">
            <h6>
                <p>Fabricante</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="fabricante" id="fabricante"
         {{-- value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}"> --}}
            value="{{ old('fabricante') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="banda">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda" id="banda"
        {{-- value="{{ isset($registro->banda) ? $registro->banda : '' }}"> --}}
            value="{{ old('banda') }}">
    </div>

    <div class="form-group col-md-3">
        <label for="metros">
            <h6>
                <p>Metros</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="metros" id="metros"
        {{-- value="{{ isset($registro->metros) ? $registro->metros : '' }}"> --}}
            value="{{ old('metros') }}">
    </div>


