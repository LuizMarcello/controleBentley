<div class="row">
    <div class="form-group col-md-7">
        <label for="">
            <h6>
                <p>Nome/Razão Social</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    </div>

    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>CNPJ/CPF</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="cnpj" value="{{ isset($registro->cnpj) ? $registro->cnpj : '' }}">
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
        <input type="text" class="form-control" name="ufie" value="{{ isset($registro->ufie) ? $registro->ufie : '' }}">
    </div>
</div>

<br>
<br>

<div class="row">
    <div class="form-group custom-selectd">
        <label for="distr">
            <h6>
                <p>Distribuidor atual</p>
            </h6>
        </label>

        <input type="text" readonly="true" id="distr" name="distribuidor" class="form-control"
            value="{{ isset($registro->distribuidor) ? $registro->distribuidor : '' }}">

        <br>

        <label for="alterar1">
            <h6>
                <p>Alterar Distribuidor</p>
            </h6>
        </label>

        @php
        function selected1( $value, $selected ){
        return $value==$selected ? ' selected="selected"' : '';
        }
        @endphp

        <select class="form-control" name="distribuidor" id="alterar1">

            <option value="">Selecione</option>

            <option value="Joao Pereira da Silva" 
            <?php echo selected1('Joao Pereira da Silva', $registro->distribuidor); ?>>
                  João Pereira da Silva
            </option>

            <option value="Pedro Fonseca Goulart"
            <?php echo selected1('Pedro Fonseca Goulart', $registro->distribuidor); ?>>
                Pedro Fonseca Goulart
            </option>


            <option value="Paulo Henrique Almorim" 
            <?php echo selected1('Paulo Henrique Almorim', $registro->distribuidor); ?>>
                Paulo Henrique Almorim
            </option>

            <option value="José da Silva Pacheco"
            <?php echo selected1('José da Silva Pacheco', $registro->distribuidor); ?>>
                José da Silva Pacheco
            </option>

            <option value="Luiz Claudio Goulart"
            <?php echo selected1('Luiz Claudio Goulart', $registro->distribuidor); ?>>
                Luiz Claudio Goulart
            </option>

            <option value="Renato da Silva Rogerio"
            <?php echo selected1('Renato da Silva Rogerio', $registro->distribuidor); ?>>
               Renato da Silva Rogerio
            </option>

            <option value="Alan Cardeck"
            <?php echo selected1('Alan Cardeck', $registro->distribuidor); ?>>
                Alan Cardeck
            </option>
        </select>
    </div>

    <div class="form-group custom-selectd">
        <label for="design">
            <h6>
                <p>Designação</p>
            </h6>
        </label>

        <input type="text" readonly="true" id="design" name="designacao" class="form-control"
            value="{{ isset($registro->designacao) ? $registro->designacao : '' }}">

        <br>

        <label for="alterar2">
            <h6>
                <p>Alterar designação</p>
            </h6>
        </label>

        @php
        function selected2( $value, $selected ){
        return $value==$selected ? ' selected="selected"' : '';
        }
        @endphp


        <select class="form-control" name="designacao" id="alterar2">

            <option value="">Selecione</option>
            
            <option value="Opcao1"
            <?php echo selected2('Opcao1', $registro->designacao); ?>>
                Opcao1
            </option>

            <option value="Opcao2"
            <?php echo selected2('Opcao2', $registro->designacao); ?>>
                Opcao2
            </option>

            <option value="Opcao3" 
            <?php echo selected2('Opcao3', $registro->designacao); ?>>
                Opcao3
            </option>

            <option value="Opcao4" 
            <?php echo selected2('Opcao4', $registro->designacao); ?>>
                Opcao4
            </option>

            <option value="Opcao5" 
            <?php echo selected2('Opcao5', $registro->designacao); ?>>
                Opcao5
            </option>

        </select>
    </div>
</div>

<br>
<br>

<div class="row">
    <div class="form-group custom-selectd">
        <label for="inst">
            <h6>
                <p>Instalador atual</p>
            </h6>
        </label>

        <input type="text" readonly="true" name="instalador" id="inst" class="form-control"
            value="{{ isset($registro->instalador) ? $registro->instalador : '' }}">

        <br>

        <label for="alterar3">
            <h6>
                <p>Alterar Instalador</p>
            </h6>
        </label>

        @php
        function selected3( $value, $selected ){
        return $value==$selected ? ' selected="selected"' : '';
        }
        @endphp

        <select class="form-control" name="instalador" id="alterar3">

            <option value="">Selecione</option>

            <option value="João Pereira da Silva" 
            <?php echo selected3('João Pereira da Silva', $registro->instalador); ?>>
                João Pereira da Silva
            </option>

            <option value="Pedro Fonseca Goulart" 
            <?php echo selected3('Pedro Fonseca Goulart', $registro->instalador); ?>>
                Pedro Fonseca Goulart
            </option>

            <option value="Paulo Henrique Almorim" 
            <?php echo selected3('Paulo Henrique Almorim', $registro->instalador); ?>>
                Paulo Henrique Almorim
            </option>0

            <option value="José da Silva Pacheco" 
            <?php echo selected3('José da Silva Pacheco', $registro->instalador); ?>>
                José da Silva Pacheco
            </option>

            <option value="Luiz Claudio Goulart" 
            <?php echo selected3('Luiz Claudio Goulart', $registro->instalador); ?>>
                Luiz Claudio Goulart
            </option>
            
            <option value="Renato da Silva Rogerio" 
            <?php echo selected3('Renato da Silva Rogerio', $registro->instalador); ?>>
                Renato da Silva Rogerio
            </option>
            
            <option value="Alan Cardeck" 
            <?php echo selected3('Alan Cardeck', $registro->instalador); ?>>
                Alan Cardeck
            </option>
        </select>
    </div>
            
    <div class="form-group custom-selectd">
        <label for="sit">
            <h6>
                <p>Situação/Status</p>
            </h6>
        </label>

        <input type="text" readonly="true" id="sit" name="situacao" class="form-control"
            value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">

        <br>

        <label for="alterar4">
            <h6>
                <p>Alterar situação</p>
            </h6>
        </label>

        @php
        function selected4( $value, $selected ){
        return $value==$selected ? ' selected="selected"' : '';
        }
        @endphp

        <select class="form-control" name="situacao" id="alterar4">

            <option value="">Selecione</option>

            <option value="Aguardando confirmação de dados" 
            <?php echo selected4('Aguardando confirmação de dados', $registro->situacao); ?>>
                Aguardando confirmação de dados
            </option>

            <option value="Cadastro aprovado" 
            <?php echo selected4('Cadastro aprovado', $registro->situacao); ?>>
                Cadastro aprovado
            </option>
            
           
            <option>Cancelado</option>
            <option>Desinstalado</option>
            <option>Desligado por falta de pagamento</option>
            <option>Em cadastramento</option>
            <option>Em cancelamento</option>
            <option>Em manutenção</option>
            <option>Em revisão</option>
            <option>Equipamentos designados</option>
            <option>Instalação agendada</option>
            <option>Instalação realizada</option>
            <option>Não aprovado serasa</option>
            <option>Ponto em operação</option>
            <option>Selecionado para desinstalação</option>
            <option>Selecionado para desligamento</option>
            <option>Selecionado para religamento</option>
            <option>Suspensão administrativa</option>
            <option>Suspensão temporária</option>
        </select>
    </div>
           

            


</div>

<br>

<div class="row">
    <h6>
        <p>Plano cadastrado</p>
    </h6>
</div>

<div class="row">
    <div class="form-group col-3 offset-0">
        <label for="">
            <h6>
                <p>Banda</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="banda"
            value="{{ isset($registro->banda) ? $registro->banda : '' }}">
    </div>
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Plano</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="plano"
            value="{{ isset($registro->plano) ? $registro->plano : '' }}">
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="">
            <h6>
                <p>Valor</p>
            </h6>
        </label>
        <input type="text" class="form-control" name="valor"
            value="{{ isset($registro->valor) ? $registro->valor : '' }}">
    </div>
    <div class="form-group col-3 offset-0">
        <label for="">
            <h6>
                <p>Data adesão</p>
            </h6>
        </label>
        <input type="text" readonly="true" class="form-control" name="dataAdesao"
            value="{{ isset($registro->dataAdesao) ? $registro->dataAdesao : '' }}">
    </div>
    {{-- <input type="text" class="form-control"
        name="customer['migracao']">--}}
</div>

<br>

{{-- <div>
    <form action="{{ route('admin.clientes.adicionar') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <label for="123">
            <h6>
                <p>Observacões</p>
            </h6>
        </label>
        <textarea class="form-control rounded-0" id="123" name="observacao" cols="1" rows="10"
            value="{{ isset($registro->observacao) ? $registro->observacao : '' }}"></textarea>
        --}}
        {{-- <button type="submit"
            class="btn btn-outline-success">Atualizar</button>--}}
        {{--
    </form>
</div> --}}

{{-- <div class="row">
    <div class="form-group col-md-3"> --}}
        <!-- Botão que dispara o Modal -->
        {{-- <br>
        <button type="button" class="btn btn-primary btn btn-sm" data-toggle="modal" data-target="#migClienteModal">
            Migrações
        </button>

        <!-- Inicio do modal -->
        <div class="modal fade" id="migClienteModal" tabindex="-1" role="dialog" aria-labelledby="migClienteModalLabel">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="migClienteModalLabel">Migrações realizadas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body form-group">
                        <form action="{{ route('admin.clientes.adicionar') }}" method="POST">
                            {{ csrf_field() }} --}}
                            {{-- <input type="hidden" name="_method"
                                value="put">--}}
                            {{-- <textarea class="form-control rounded-0" name="migracao"
                                cols="4" rows="15"
                                value="{{ isset($registro->migracao) ? $registro->migracao : '' }}"></textarea>
                            <button type="submit" class="btn btn-outline-success">Atualizar</button>
                        </form>

                    </div> --}}
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div> --}}

                    {{--
                </div>
            </div>
        </div> --}}
        {{-- fim do modal --}}
        {{--
    </div> --}}
    {{--
</div> --}}
           
            







