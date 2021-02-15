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

    <div class="form-group col-md-4">
        <label for="notafiscal">
            <h6>
                <p>Nota fiscal</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="notafiscal" id="notafiscal"
            value="{{ isset($registro->notafiscal) ? $registro->notafiscal : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="datanota">
            <h6>
                <p>Data da nota</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="datanota" id="datanota"
            value="{{ isset($registro->datanota) ? $registro->datanota : '' }}">
    </div>

    <div class="form-group col-md-2">
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
                <p>Modelo da antena</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="modelo" id="modelo"
            value="{{ isset($registro->modelo) ? $registro->modelo : '' }}">
    </div>
    
    <div class="form-group col-md-4">
        <label for="fabricante">
            <h6>
                <p>Fabricante</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="fabricante" id="fabricante"
            value="{{ isset($registro->fabricante) ? $registro->fabricante : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="diametro">
            <h6>
                <p>Diâmetro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="diametro" id="diametro"
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



