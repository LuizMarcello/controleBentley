<div class="row">
    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Data</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="created_at"
            value="{{ isset($registro->created_at) ? $registro->created_at : '' }}" disabled>
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal"
            value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}">
    </div>
    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota"
            value="{{ isset($registro->datanota) ? $registro->datanota : '' }}">
    </div>

    <div class="form-group col-md-6">
        <label for="">
            <h6>
                <p>Fabricante</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="fabricante"
            value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Modelo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo"
            value="{{ isset($registro->modelo) ? $registro->modelo : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda"
            value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="">
            <h6>
                <p>Serial</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="serial"
            value="{{ isset($registro->serial) ? $registro->serial : '' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="">
            <h6>
                <p>Mac Address</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="serial"
            value="{{ isset($registro->macaddress) ? $registro->macaddress : '' }}">
    </div>
</div>

<div class="row">




    <div class="form-group col-md-4">
        <label for="">
            <h6>
                <p>Situação</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="situacao"
            value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">
    </div>

</div>

