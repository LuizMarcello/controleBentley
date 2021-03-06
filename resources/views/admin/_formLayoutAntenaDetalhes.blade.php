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
    <div class="form-group col-md-4">
        <label for="">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal"
            value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}" disabled>
    </div>
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota"
            value="{{ isset($registro->datanota) ? $registro->datanota : '' }}" disabled>
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda"
            value="{{ isset($registro->banda) ? $registro->banda : '' }}" disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Modelo da antena</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo"
            value="{{ isset($registro->modelo) ? $registro->modelo : '' }}" disabled>
    </div>

    <div class="form-group col-md-4">
        <label for="">
            <h6>
                <p>Fabricante</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="fabricante"
            value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}" disabled>
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Diâmetro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="diametro"
            value="{{ isset($registro->diametro) ? $registro->diametro : '' }}" disabled>
    </div>

    <div class="form-group col-md-3 custom-selectd">
        <label for="">
            <h6>
                <p>Situação</p>
            </h6>
        </label>
        <input type="text" readonly="true" name="situacao" class="form-control"
            value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">
        <br>
    </div>
</div>







