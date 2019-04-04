{block name="page-content"}

    {literal}
        <script type="text/javascript">
            $(document).ready(function () {
                
                var numero_protocolo    = new Cleave('.input-protocolo', {
                    delimiters: ['/', '/'],
                    blocks: [2, 2, 5],
                    uppercase: true
                });

                var data_protocolo      = new Cleave('.input-data', {
                    date: true,
                    datePattern: ['d', 'm', 'Y']
                });                

                $('#myModal .modal-footer .btn-default').click(function () {
                    $(location).attr("href", "index.php");
                });                                    
                
                $('#enviar_requisicao').click(function () {
                    
                    checa_dados();

                    var dados =
                    'nu_protocolo='             + $('#nu_protocolo').val() +
                    '&dt_protocolo='            + $('#dt_protocolo').val() +
                    '&cd_secretaria='           + $('#cd_secretaria').val() +
                    '&cd_tp_contrato='          + $('#cd_tp_contrato').val() +
                    '&cd_curso='                + $('#cd_curso').val() +
                    '&qt_estagiario='           + $('#qt_estagiario').val() +
                    '&nu_matricula_supervisor=' + $('#nu_matricula_supervisor').val() +
                    '&cd_lotacao_estagiario='   + $('#cd_lotacao_estagiario').val() +
                    '&form_enviado='            + $('#form_enviado').val();
                    
                    var tem_id_estagio_definido = $('#id_local_estagio').length;

                    if (tem_id_estagio_definido == 1) {

                        var dados = dados + '&id_local_estagio=' + $('#id_local_estagio').val();

                    } else {

                        var dados = dados + '&nm_local_estagio=' + $('#nm_local_estagio').val() + '&nu_andar=' + $('#nu_andar').val();

                    }

                    $.ajax({
                        type: 'POST',
                        dataType: 'text',
                        url: 'requisicao_cadastra_salvar.php',
                        async: true,
                        data: dados,
                        success: function (response) {
                            $('h4.modal-title').text('Cadastro de Requisições');
                            $('.modal-body p').text('Dados foram cadastrados com sucesso!!');
                            $('#myModal .modal-footer .btn-primary').hide();                                                
                            $('#myModal').modal('show');          
                        }
                    });
                });
                
                function checa_dados() {
                    
                    var num_protocolo  = $('#nu_protocolo').val();
                    var data_protocolo = $('#dt_protocolo').val();
                    var secretaria     = $('#cd_secretaria').val();
                    var tem_id_estagio_definido = $('#id_local_estagio').length;
                    var erro           = 0;
                   
                    if (num_protocolo == '') {
                        var msg  = 'Por favor, preencha o Número de Protocolo!';
                        mensagem_erro(msg);    
                        erro++;
                        $('#nu_protocolo').focus();
                        exit();
                    }
                    
                    if (data_protocolo == '') {
                        var msg  = 'Por favor, preencha a Data de Protocolo!';
                        mensagem_erro(msg);
                        erro++;
                        $('#dt_protocolo').focus();
                        exit();                        
                    }
                    
                    if (secretaria == 0) {
                        var msg  = 'Por favor, preencha a Secretaria!';
                        mensagem_erro(msg);
                        erro++;
                        exit();                        
                    }
                    
                    if (tem_id_estagio_definido == 0) {
                        
                        if ($('#nm_local_estagio').val() == '') {
                            
                            var msg = 'Por favor, preencha o Local de Estágio!';
                            mensagem_erro(msg);
                            erro++;
                            exit();                                                    
                        }                            
                        
                    } else {
                        
                        if ($('#id_local_estagio').val() == 0) {
                            
                            var msg = 'Por favor, preencha o id do Local de Estágio!';
                            mensagem_erro(msg);
                            erro++;
                            exit();                                                    
                        }                            
                        
                    }
                    
                    if ($('#cd_tp_contrato').val() == 0) {
                    
                        var msg = 'Por favor, preencha o Tipo de Contrato!';
                        mensagem_erro(msg);
                        erro++;
                        exit();                                              
                    }
                    
                    
                    if ($('#cd_curso').val() == 0) {
                    
                        var msg = 'Por favor, preencha o Curso!';
                        mensagem_erro(msg);
                        erro++;
                        exit();                                              
                    }
                    
                    
                    if ($('#nu_matricula_supervisor').val() == '') {
               
                        var msg = 'Por favor, preencha a matrícula do Supervisor!';
                        mensagem_erro(msg);
                        erro++;
                        exit();                          
                    }
                    
                    if ($('#cd_lotacao_estagiario').val() == '') {
               
                        var msg = 'Por favor, preencha a lotação do Estagiário!';
                        mensagem_erro(msg);
                        erro++;
                        exit();                          
                    }
                    
                    if (erro == 0) {
                        $('div.alert').hide();
                    } 
                    
                }
                
                function mensagem_erro(msg) {

                    // $('#myModal h4.modal-title').text('Cadastro de Requisições');
                    // $('#myModal .modal-body p').text(msg);
                    // $('#myModal .modal-footer .btn-primary').hide();                    
                    // $('#myModal').attr('id', 'MyModal_' + campo);
                    // $('#MyModal_' + campo).modal();             
                    
                    $('div.alert').html('<span>' + msg + '</span>').show();
                    
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

        <div id="responsecontainer">
        </div>

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
                    <span><h5>Cadastro de Requisições</h5></span><hr>
                </div>
            </div>            
            <div class="alert alert-danger">
                <span>Erro!</span>
            </div>
            <div class="form-group">
                <label for="nu_protocolo" class="control-label col-md-4">Número Protocolo:</label> 
                <div class="col-md-2">
                    <input id="nu_protocolo" name="nu_protocolo" placeholder="Número Protocolo" type="text" class="form-control input-protocolo">
                </div>
            </div>
            <div class="form-group">
                <label for="dt_protocolo" class="control-label col-md-4">Data Protocolo:</label> 
                <div class="col-md-2">
                    <input id="dt_protocolo" name="dt_protocolo" placeholder="Data Protocolo" type="text" required="required" class="form-control input-data">
                </div>
            </div>
            <div class="form-group">
                <label for="cd_secretaria" class="control-label col-md-4">Secretaria Solicitante:</label> 
                <div class="col-md-5">
                    <select id="cd_secretaria" name="cd_secretaria" class="select form-control" required="required">
                        <option value="0">Selecione uma Secretaria</option>
                        {foreach $secretarias as $sec} 
                            <option value="{$sec.cd_secretaria}">{$sec.nm_secretaria|upper}</option>
                        {/foreach}    
                    </select>
                </div>
            </div>
            <div class="form-group">
                {if $qt_registros > 0}
                    <label for="id_local_estagio" class="control-label col-md-4">Local das Atividades:</label>                     
                    <div class="col-md-5">
                        <select id="id_local_estagio" name="id_local_estagio" class="select form-control" required="required">
                            <option value="0">Selecione um Local de Estágio</option>
                            {foreach $local as $l} 
                                <option value="{$l.id_local_estagio}">{$l.nm_local_estagio|upper} - {$l.nu_andar}º andar</option>
                            {/foreach}    
                        </select>   
                    </div>
                {else}
                    <label for="nm_local_estagio" class="control-label col-md-4">Local das Atividades:</label>                     
                    <div class="col-md-5">                
                        <input class="form-control col-md-12" id="nm_local_estagio" name="nm_local_estagio" placeholder="Endereço" type="text" required="required">
                        <select id="nu_andar" name="nu_andar" class="select form-control" required="required">
                            <option value="0">Selecione um número de andar</option>
                            {for  $local=1 to 19}
                                <option value="{$local}">{$local}º andar</option>
                            {/for}    
                        </select>        
                    </div>   
                {/if}      
            </div>              
            <div class="form-group">
                <label for="cd_tp_contrato" class="control-label col-md-4">Tipo Contrato:</label> 
                <div class="col-md-5">
                    <select id="cd_tp_contrato" name="cd_tp_contrato" class="select form-control" required="required">
                        <option value="0">Selecione o tipo de contrato</option>
                        <option value="1">Reposição</option>
                        <option value="2">Nova Vaga</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_curso" class="control-label col-md-4">Curso:</label> 
                <div class="col-md-5">
                    <select id="cd_curso" name="cd_curso" class="select form-control" required="required">
                        <option value="0">Selecione um Curso</option>
                        {foreach $curso as $cur} 
                            <option value="{$cur.cd_ident_crg}">{$cur.cd_ident_crg} - {$cur.nm_extenso_crg|upper}</option>
                        {/foreach}                         
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="qt_estagiario" class="control-label col-md-4">Quantidade de Estagiários</label> 
                <div class="col-md-1">
                    <select id="qt_estagiario" name="qt_estagiario" class="select form-control" required="required">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="1">3</option>
                        <option value="2">4</option>
                        <option value="1">5</option>
                        <option value="2">6</option>
                        <option value="1">7</option>
                        <option value="2">8</option>
                        <option value="2">9</option>
                        <option value="2">10</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nu_matricula_supervisor" class="control-label col-md-4">Matrícula Supervisor:</label> 
                <div class="col-md-2">
                    <input id="nu_matricula_supervisor" name="nu_matricula_supervisor" placeholder="Matrícula Supervisor" type="text" class="form-control" required="required" maxlength="7" size="7">
                </div>
            </div>
            <div class="form-group">
                <label for="cd_lotacao_estagiario" class="control-label col-md-4">Centro de Custo Estagiário:</label> 
                <div class="col-md-2">
                    <input id="cd_lotacao_estagiario" name="cd_lotacao_estagiario" placeholder="Centro de Custo Estagiário" type="text" class="form-control" required="required" maxlength="5" size="5">
                </div>
            </div> 
            <div class="col-md-offset-4 col-md-8">
                <input type="button" id="enviar_requisicao" name="enviar_requisicao" class="btn btn-primary" value="Enviar">
                <input type="hidden" type="text" class="btn btn-primary" name="form_enviado" id="form_enviado" value="1">
                <input type="hidden" type="text" class="btn btn-primary" name="qt_registros2" id="qt_registros2" value="{$qt_registros} ">
                <input type="hidden" type="text" class="btn btn-primary" name="local2" id="local2" value="{$local} ">
            </div>
        </form>
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

{/block}  