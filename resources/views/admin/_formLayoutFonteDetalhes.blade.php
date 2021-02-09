<div class="row">
    <div class="form-group col-md-3">
        <label for="created_at">
            <h6>
                <p>Data</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="created_at" id="created_at"
            value="{{ isset($registro->created_at) ? $registro->created_at : '' }}" disabled>
    </div>

    <div class="form-group col-md-3">
        <label for="notafiscal">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal" id="notafiscal"
            value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}" disabled>
    </div>

    <div class="form-group col-md-3">
        <label for="datanota">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota" id="datanota"
            value="{{ isset($registro->datanota) ? $registro->datanota : '' }}" disabled>
    </div>

    <div class="form-group col-md-3">
        <label for="fabricante">
            <h6>
                <p>Marca</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="fabricante"
            value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}" disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        <label for="modelo">
            <h6>
                <p>Modelo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo" id="modelo"
            value="{{ isset($registro->modelo) ? $registro->modelo : '' }}" disabled>
    </div>

    <div class="form-group col-md-3">
        <label for="voltagem">
            <h6>
                <p>Voltagem</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="voltagem" id="voltagem"
            value="{{ isset($registro->voltagem) ? $registro->voltagem : '' }}" disabled>
    </div>

    <div class="form-group col-md-5">
        <label for="serial">
            <h6>
                <p>Serial</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="serial"
            value="{{ isset($registro->serial) ? $registro->serial : '' }}" disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4 custom-selectd">
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


