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
        <label for="">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal"
            value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota"
            value="{{ isset($registro->datanota) ? $registro->datanota : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Modelo da antena</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo"
            value="{{ isset($registro->modelo) ? $registro->modelo : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-1">
        <label for="">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda"
            value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    </div>

    <div class="form-group col-md-5">
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
                <p>Diâmetro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="diametro"
            value="{{ isset($registro->diametro) ? $registro->diametro : '' }}">
    </div>

    <div class="form-group col-md-3 custom-selectd">
        <label for="situacao">
            <h6>
                <p>Situação</p>
            </h6>
        </label>
        <select class="form-control" name="situacao" id="situacao">
            <option value="">Selecione</option>
            <option value="Estoque" <?php echo selected('Estoque', $registro->situacao); ?>>
                Estoque
            </option>
            <option value="Cliente" <?php echo selected('Cliente', $registro->situacao); ?>>
                Cliente
            </option>
            <option value=" Defeito" <?php echo selected('Defeito', $registro->situacao); ?>>
                Defeito
            </option>
            <option value="Devolvido" <?php echo selected('Devolvido', $registro->situacao); ?>>
                Devolvido
            </option>
        </select>
    </div>
</div>
