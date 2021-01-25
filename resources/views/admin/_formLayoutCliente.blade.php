{{-- <form action="add.php" method="post"> --}}
    <!-- area de campos do form -->

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
            <input type="text" class="form-control" name="cep"
                value="{{ isset($registro->cep) ? $registro->cep : '' }}">
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

    <div class="row">
        <div class="form-group custom-selectd">
            <label for="">
                <h6>
                    <p>Instalador atual</p>
                </h6>
            </label>

            <input type="text" readonly="true" name="instalador" class="form-control"
                value="{{ isset($registro->instalador) ? $registro->instalador : '' }}">

            <br>

            <label for="alterar1">
                <h6>
                    <p>Alterar Instalador</p>
                </h6>
            </label>

            <select class="form-control" name="instalador" id="alterar1">
                <option>João</option>
                <option>Pedro</option>
                <option>Paulo</option>
                <option>José</option>
            </select>
        </div>

        <div class="form-group custom-selectd">
            <label for="">
                <h6>
                    <p>Situação/Status</p>
                </h6>
            </label>

            <input type="text" readonly="true" name="situacao" class="form-control"
                value="{{ isset($registro->situacao) ? $registro->situacao : '' }}">

            <br>

            <label for="alterar2">
                <h6>
                    <p>Alterar situação</p>
                </h6>
            </label>

            <select class="form-control" name="situacao" id="alterar2">
                <option>Aguardando confirmação de dados</option>
                <option>Cadastro aprovado</option>
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

        {{-- <input type="text" class="form-control" name="customer['migracao']">
        --}}
    </div>

    <br>

    <div class="row">
        <div class="form-group col-md-3">
            {{-- <label for="">Observação</label> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#obsClienteModal">
                Observações
            </button>

            <!-- Modal -->

            <div class="modal fade" id="obsClienteModal" tabindex="-1" role="dialog"
                aria-labelledby="obsClienteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="obsClienteModalLabel">Observações do cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
                {{-- <input type="text" class="form-control"
                    name="customer['observacao']"> --}}
            </div>

            {{-- <input type="text" class="form-control" name="customer['observacao']">
            --}}
        </div>

        <div class="form-group col-md-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#migClienteModal">
                Migração
            </button>

            <!-- Modal -->
            <div class="modal fade" id="migClienteModal" tabindex="-1" role="dialog"
                aria-labelledby="migClienteModalLabel">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="migClienteModalLabel">Migrações realizadas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body form-group">
                            <form action="{{ route('admin.clientes.atualizar', $registro->id) }}" method="POST">
                                <textarea class="form-control rounded-0" name="migracao" cols="4" rows="25"></textarea>
                                <button type="submit">Atualizar</button>
                            </form>


                        </div>
                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Salvar</button>
                        </div> --}}
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
