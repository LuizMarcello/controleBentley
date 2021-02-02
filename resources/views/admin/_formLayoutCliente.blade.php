<div class="row">
    <div class="form-group col-md-7">
        <label for="">
            <h6>
                <p>Nome/Razão Social</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="nome"
            value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>CNPJ/CPF</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cnpj"
            value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Email</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="email"
            value="{{ isset($registro->email) ? $registro->email : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-5">
        <label for="">
            <h6>
                <p>Endereço</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="endereco"
            value="{{ isset($registro->endereco) ? $registro->endereco : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Bairro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="bairro"
            value="{{ isset($registro->bairro) ? $registro->bairro : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>CEP</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cep" value="{{ isset($registro->cep) ? $registro->cep : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Data Cadastro</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="dataCadastro"
            value="{{ isset($registro->dataCadastro) ? $registro->dataCadastro : '' }}" disabled>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Municipio</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cidade"
            value="{{ isset($registro->cidade) ? $registro->cidade : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Telefone</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="telefone"
            value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>Celular</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="celular"
            value="{{ isset($registro->celular) ? $registro->celular : '' }}">
    </div>

    <div class="form-group col-md-1">
        <label for="">
            <h6>
                <p>UF</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="estado"
            value="{{ isset($registro->estado) ? $registro->estado : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>IE</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="ie" value="{{ isset($registro->ie) ? $registro->ie : '' }}">
    </div>

    <div class="form-group col-md-2">
        <label for="">
            <h6>
                <p>UF IE</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="ufie"
            value="{{ isset($registro->ufie) ? $registro->ufie : '' }}">
    </div>
</div>

<br>
<br>

<div class="row">
    <br>
    <div class="form-group col-md-3 custom-selectd">  
        <label for="alterar1">
            <h6>
                <p>Distribuidor</p>
            </h6>
        </label>

        @php
            function selected1($value, $selected)
            {
                return $value == $selected ? ' selected="selected"' : '';
            }
        @endphp

        <select class="form-control" name="distribuidor" id="alterar1">

            <option value="">Selecione</option>

            <option value="Joao Pereira da Silva" <?php echo selected1('Joao Pereira da Silva',
                $registro->distribuidor); ?>>
                João Pereira da Silva
            </option>

            <option value="Pedro Fonseca Goulart" <?php echo selected1('Pedro Fonseca Goulart',
                $registro->distribuidor); ?>>
                Pedro Fonseca Goulart
            </option>

            <option value="Paulo Henrique Almorim" <?php echo selected1('Paulo Henrique Almorim',
                $registro->distribuidor); ?>>
                Paulo Henrique Almorim
            </option>

            <option value="José da Silva Pacheco" <?php echo selected1('José da Silva Pacheco',
                $registro->distribuidor); ?>>
                José da Silva Pacheco
            </option>

            <option value="Luiz Claudio Goulart" <?php echo selected1('Luiz Claudio Goulart', $registro->
                distribuidor); ?>>
                Luiz Claudio Goulart
            </option>

            <option value="Renato da Silva Rogerio" <?php echo selected1('Renato da Silva Rogerio',
                $registro->distribuidor); ?>>
                Renato da Silva Rogerio
            </option>

            <option value="Alan Cardeck" <?php echo selected1('Alan Cardeck', $registro->distribuidor);
                ?>>
                Alan Cardeck
            </option>
        </select>
    </div>

    <br>

    <div class="form-group col-md-2 custom-selectd">
        <label for="alterar2">
            <h6>
                <p>Designação</p>
            </h6>
        </label>

        @php
            function selected2($value, $selected)
            {
                return $value == $selected ? ' selected="selected"' : '';
            }
        @endphp

        <select class="form-control" name="designacao" id="alterar2">

            <option value="">Selecione</option>

            <option value="Opcao1" <?php echo selected2('Opcao1', $registro->designacao); ?>>
                Opcao1
            </option>

            <option value="Opcao2" <?php echo selected2('Opcao2', $registro->designacao); ?>>
                Opcao2
            </option>

            <option value="Opcao3" <?php echo selected2('Opcao3', $registro->designacao); ?>>
                Opcao3
            </option>

            <option value="Opcao4" <?php echo selected2('Opcao4', $registro->designacao); ?>>
                Opcao4
            </option>

            <option value="Opcao5" <?php echo selected2('Opcao5', $registro->designacao); ?>>
                Opcao5
            </option>

        </select>
    </div>

<br>
<br>

    <br>

    <div class="form-group col-md-3 custom-selectd">
        <label for="alterar3">
            <h6>
                <p>Instalador</p>
            </h6>
        </label>

        @php
            function selected3($value, $selected)
            {
                return $value == $selected ? ' selected="selected"' : '';
            }
        @endphp

        <select class="form-control" name="instalador" id="alterar3">

            <option value="">Selecione</option>

            <option value="João Pereira da Silva" <?php echo selected3('João Pereira da Silva',
                $registro->instalador); ?>>
                João Pereira da Silva
            </option>

            <option value="Pedro Fonseca Goulart" <?php echo selected3('Pedro Fonseca Goulart',
                $registro->instalador); ?>>
                Pedro Fonseca Goulart
            </option>

            <option value="Paulo Henrique Almorim" <?php echo selected3('Paulo Henrique Almorim',
                $registro->instalador); ?>>
                Paulo Henrique Almorim
            </option>0

            <option value="José da Silva Pacheco" <?php echo selected3('José da Silva Pacheco',
                $registro->instalador); ?>>
                José da Silva Pacheco
            </option>

            <option value="Luiz Claudio Goulart" <?php echo selected3('Luiz Claudio Goulart', $registro->
                instalador); ?>>
                Luiz Claudio Goulart
            </option>

            <option value="Renato da Silva Rogerio" <?php echo selected3('Renato da Silva Rogerio',
                $registro->instalador); ?>>
                Renato da Silva Rogerio
            </option>

            <option value="Alan Cardeck" <?php echo selected3('Alan Cardeck', $registro->instalador); ?>>
                Alan Cardeck
            </option>
        </select>
    </div>

    <br>

    <div class="form-group col-md-4 custom-selectd">
        <label for="alterar4">
            <h6>
                <p>Situação</p>
            </h6>
        </label>

        @php
            function selected4($value, $selected)
            {
                return $value == $selected ? ' selected="selected"' : '';
            }
        @endphp

        <select class="form-control" name="situacao" id="alterar4">

            <option value="">Selecione</option>

            <option value="Aguardando confirmação de dados" <?php echo selected4( 'Aguardando confirmação de dados',
             $registro->situacao); ?>>
                Aguardando confirmação de dados
            </option>

            <option value="Cadastro aprovado" <?php echo selected4('Cadastro aprovado',
             $registro->situacao); ?>>
                Cadastro aprovado
            </option>


            <option value="Cancelado" <?php echo selected4('Cancelado',
             $registro->situacao); ?>>
                Cancelado
            </option>

            <option value="Desinstalado" <?php echo selected4('Desinstalado',
             $registro->situacao); ?>>
                Desinstalado
            </option>

            <option value="Desligado por falta de pagamento" <?php echo selected4( 'Desligado por falta de pagamento', 
             $registro->situacao,); ?>>
                Desligado por falta de pagamento
            </option>

            <option value="Em cadastramento" <?php echo selected4('Em cadastramento',
             $registro->situacao); ?>>
                Em cadastramento
            </option>

            <option value="Em cancelamento" <?php echo selected4('Em cancelamento',
             $registro->situacao); ?>>
                Em cancelamento
            </option>

            <option value="Em manutenção" <?php echo selected4('Em manutenção',
             $registro->situacao); ?>>
                Em manutenção
            </option>

            <option value="Em revisão" <?php echo selected4('Em revisão',
             $registro->situacao); ?>>
                Em revisão
            </option>

            <option value="Equipamentos designados" <?php echo selected4('Equipamentos designados',
                $registro->situacao); ?>>
                Equipamentos designados
            </option>

            <option value="Instalação agendada" <?php echo selected4('Instalação agendada',
             $registro->situacao); ?>>
                Instalação agendada
            </option>

            <option value="Instalação realizada" <?php echo selected4('Instalação realizada',
             $registro->situacao); ?>>
                Instalação realizada
            </option>

            <option value="Não aprovado serasa" <?php echo selected4('Não aprovado serasa',
             $registro->situacao); ?>>
                Não aprovado serasa
            </option>

            <option value="Ponto em operação" <?php echo selected4('Ponto em operação',
             $registro->situacao); ?>>
                Ponto em operaçãoa
            </option>

            <option value="Selecionado para desinstalação" <?php echo selected4( 'Selecionado para desinstalação',
             $registro->situacao,); ?>>
                Selecionado para desinstalação
            </option>

            <option value="Selecionado para desligamento" <?php echo selected4( 'Selecionado para desligamento',
             $registro->situacao,); ?>>
                Selecionado para desligamento
            </option>

            <option value="Selecionado para religamento" <?php echo selected4( 'Selecionado para religamento',
             $registro->situacao,); ?>>
                Selecionado para religamento
            </option>

            <option value="Suspensão administrativa" <?php echo selected4('Suspensão administrativa',
                $registro->situacao); ?>>
                Suspensão administrativa
            </option>

            <option value="Suspensão temporária" <?php echo selected4('Suspensão temporária', $registro->situacao); ?>>
                Suspensão temporária
            </option>
        </select>
    </div>
</div>

<br>
   
<div class="row">
    <div class="form-group col-md-3 custom-selectd">  
        <label for="alterar5">
            <h6>
                <p>Plano</p>
            </h6>
        </label>

        <select class="form-control" name="plano" id="alterar5">

            <option value="">Selecione</option>

            <option value="Consumer 1 Mbps">
                Consumer 1 Mbps
            </option>

            <option value="Consumer 2 Mbps">
                 Consumer 2 Mbps
            </option>

            <option value="Consumer 4 Mbps">
                 Consumer 4 Mbps
            </option>

            <option value="Consumer 6 Mbps">
                 Consumer 6 Mbps
            </option>

            <option value="Consumer 10 Mbps">
                 Consumer 10 Mbps
            </option>

            <option value="Plano Bentley Home 2 Mbps">
               Plano Bentley Home 2 Mbps
            </option>

            <option value=" Plano Bentley Gold 4 Mbps">
                Plano Bentley Gold 4 Mbps
            </option>
        </select>
    </div>
</div>

    
        


