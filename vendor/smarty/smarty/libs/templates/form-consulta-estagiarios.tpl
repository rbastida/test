{block name="page-content"}

    {literal}
        <script type="text/javascript">
            $(document).ready(function () {

                $(function () {
                    $("#envia").click(function (e) {
                        e.preventDefault();

                        var clicked = $('input:radio:checked').val();

                        if ($.type(clicked) === "undefined") {

                            alert('voce nao solecionou ninguem');
                        } else {
                            alert('valor clicado=' + clicked);
                            seleciona_pesquisa(clicked);
                        }
                    });
                });

                function seleciona_pesquisa(clicked) {
                    if (clicked == 1) {
                        var dados = 'protocolo=' + $('#txt_search').val();
                        busca_protocolo(dados);
                    }
                }

                function busca_protocolo(dados) {

                    // numero protocolo
                    $.ajax({
                        type: 'POST',
                        dataType: 'text',
                        async: true,
                        url: 'ajax.consulta_estagiario.php',
                        data: dados,
                        success: function (response) {

                            var obj = JSON.parse(response);

                            obj.forEach(function (o, index) {

                                $('.dados').append("<tr>");
                                $('.dados').append("<td scope=\"col\">" + o.protocolo_ano + "/" + o.protocolo_origem + "/" + o.protocolo_numero + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.nome_estagiario + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.matricula_estagiario + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.cd_curso + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.dt_inicio + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.dt_termino + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.cd_lotacao + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.secretaria + "</td>");
                                $('.dados').append("<td scope=\"col\">" + o.local_estagio + "</td>");
                                $('.dados').append("</tr>");
                            });
                        }
                    });
                }

            });
        </script>

        <style>
            div.alert {
                display: none;
            }

            .modal.custom {
                outline:none;

            }

            .modal.custom .modal-dialog {
                width:50%;
                margin:0 auto;
            }

        </style>
    {/literal}

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Desliza barra lateral</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Requisições</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Encaminhamentos</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <form id="form_requisicao" class="form-horizontal" action="{$form_action}" method="POST">

            <div class="form-group">
                <div class="col-md-12">
                    <span><h5>Consulta de Estagiários</h5></span><hr>
                </div>
            </div>
            <div class="alert alert-danger">
                <span>Erro!</span>
            </div>

            <div class="form-group">
                <label for="email1" class="col-md-4 control-label">Escolha uma opção</label>
                <div class="col-md-2">
                    <div class="radio">
                        <input type="radio" name="pesquisa" id="pesquisa" value="1">
                        <label>Número Protocolo</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="pesquisa" id="pesquisa" value="2">
                        <label>Matrícula</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="pesquisa" id="pesquisa" value="3">
                        <label>CPF</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="pesquisa" id="pesquisa" value="4">
                        <label>Nome do estagiário</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="txt_search" class="col-md-4 control-label">Digite aqui</label>
                <div class="col-md-2">
                    <input type="text" class="form-control" id="txt_search" name="txt_search" placeholder="Texto a pesquisar">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-4 col-md-4">
                    <button type="submit" class="btn btn-primary" id="envia" name="envia">Pesquisar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
            </div>
        </form>

        <div id="responsecontainer">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nº Protocolo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matrícula</th>               
                        <th scope="col">Curso</th>
                        <th scope="col">Dt admissao</th>
                        <th scope="col">Dt desligamento</th>
                        <th scope="col">Lotação</th>
                        <th scope="col">Secretaria</th>
                        <th scope="col">Local</th>
                    </tr>
                </thead>
                <tbody class="row dados">

                </tbody>
            </table>
        </div>


        <!-- MODAL ALERT -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Modal Body</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- // MODAL ALERT -->  

    </div>


{/block}  