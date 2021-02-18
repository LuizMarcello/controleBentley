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
            value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="datadanota">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datadanota" id="datadanota"
            value="{{ isset($registro->datadanota) ? $registro->datadanota : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="banda">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda" id="banda"
            value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="modelo">
            <h6>
                <p>modelo</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo" id="modelo"
            value="{{ isset($registro->modelo) ? $registro->modelo : '' }}">
    </div>

    <div class="form-group col-md-5">
        <label for="marca">
            <h6>
                <p>marca</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="marca" id="marca"
            value="{{ isset($registro->marca) ? $registro->marca : '' }}">
    </div>

    <div class="form-group col-md-4">
        <label for="serial">
            <h6>
                <p>Serial</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="serial" id="serial"
            value="{{ isset($registro->serial) ? $registro->serial : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3 custom-selectd">
        <label for="situacao">
            <h6>
                <p>Situação</p>
            </h6>
        </label>
        <select class="form-control" name="situacao" id="situacao">
            <option value="">Selecione</option>
            <option value="Estoque" <?php echo selected('Estoque', $registro->situacao); ?>>
                No Estoque
            </option>
            <option value="Cliente" <?php echo selected('Cliente', $registro->situacao); ?>>
                Com o cliente
            </option>
            <option value="Defeito" <?php echo selected('Defeito', $registro->situacao); ?>>
                Com defeito
            </option>
            <option value="Devolvido" <?php echo selected('Devolvido', $registro->situacao); ?>>
                Devolvido
            </option>
        </select>
    </div>
</div>
