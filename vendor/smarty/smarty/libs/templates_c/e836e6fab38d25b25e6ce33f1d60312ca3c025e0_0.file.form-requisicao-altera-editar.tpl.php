<?php
/* Smarty version 3.1.32, created on 2019-01-02 16:35:24
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-requisicao-altera-editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2d046c0286c9_69884316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e836e6fab38d25b25e6ce33f1d60312ca3c025e0' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-requisicao-altera-editar.tpl',
      1 => 1546454086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d046c0286c9_69884316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3758857825c2d046be74171_16787749', "page-content");
?>
  <?php }
/* {block "page-content"} */
class Block_3758857825c2d046be74171_16787749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_3758857825c2d046be74171_16787749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {

                $('#myModal .modal-footer .btn-default').click(function () {
                    $(location).attr("href", "index.php");
                });                                    
                
                $('#enviar_requisicao').click(function () {
                    
                    checa_dados();

                    var dados =                                                      
                    'id_protocolo='             + $('#id_protocolo').val() +
                    '&id_requisicao='           + $('#id_requisicao').val() +
                    '&id_supervisor='           + $('#id_supervisor').val() +                    
                    '&qt_registros_local='      + $('#qt_registros_local').val() +
                    '&nu_protocolo='            + $('#nu_protocolo').val() +
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
                        url: 'requisicao_altera_salvar.php',
                        async: true,
                        data: dados,
                        success: function (response) {
                            $('h4.modal-title').text('Alteração de Requisições');
                            $('.modal-body p').text('Dados foram alterados com sucesso!!');
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
        <?php echo '</script'; ?>
>

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

        <form id="form_requisicao" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="POST">

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
                    <input id="nu_protocolo"
                           name="nu_protocolo" 
                           placeholder="Número Protocolo" 
                           type="text" 
                           class="form-control input-protocolo"
                           value="<?php echo $_smarty_tpl->tpl_vars['protocolo']->value;?>
">
                </div>
            </div>
            <div class="form-group">
                <label for="dt_protocolo" class="control-label col-md-4">Data Protocolo:</label> 
                <div class="col-md-2">
                    <input id="dt_protocolo" 
                           name="dt_protocolo" 
                           placeholder="Data Protocolo" 
                           type="text" 
                           required="required" 
                           class="form-control input-data"
                           value="<?php echo $_smarty_tpl->tpl_vars['dt_protocolo']->value;?>
">
                </div>
            </div>
            <div class="form-group">
                <label for="cd_secretaria" class="control-label col-md-4">Secretaria Solicitante:</label> 
                <div class="col-md-5">
                    <select id="cd_secretaria" name="cd_secretaria" class="select form-control" required="required">
                        <option value="0">Selecione uma Secretaria</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secretarias']->value, 'sec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sec']->value) {
?> 
                            
                            <?php if ($_smarty_tpl->tpl_vars['cd_secretaria']->value == $_smarty_tpl->tpl_vars['sec']->value['cd_secretaria']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['sec']->value['cd_secretaria'];?>
" selected><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['sec']->value['nm_secretaria'], 'UTF-8');?>
</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['sec']->value['cd_secretaria'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['sec']->value['nm_secretaria'], 'UTF-8');?>
</option>
                            <?php }?>                            
                            
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                    </select>
                </div>
            </div>
            <div class="form-group">
                <?php if ($_smarty_tpl->tpl_vars['qt_registros_local']->value > 0) {?>
                    <label for="id_local_estagio" class="control-label col-md-4">Local das Atividades:</label>                     
                    <div class="col-md-5">
                        <select id="id_local_estagio" name="id_local_estagio" class="select form-control" required="required">
                            <option value="0">Selecione um Local de Estágio</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['local']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?> 
                                
                                <?php if ($_smarty_tpl->tpl_vars['id_local_estagio']->value == $_smarty_tpl->tpl_vars['l']->value['id_local_estagio']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['id_local_estagio'];?>
" selected><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['l']->value['nm_local_estagio'], 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['l']->value['nu_andar'];?>
º andar</option>
                                <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['id_local_estagio'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['l']->value['nm_local_estagio'], 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['l']->value['nu_andar'];?>
º andar</option>                                    
                                <?php }?>    
                                
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                        </select>   
                    </div>
                <?php } else { ?>
                    <label for="nm_local_estagio" class="control-label col-md-4">Local das Atividades:</label>                     
                    <div class="col-md-5">                
                        <input class="form-control col-md-12" id="nm_local_estagio" name="nm_local_estagio" placeholder="Endereço" type="text" required="required">
                        <select id="nu_andar" name="nu_andar" class="select form-control" required="required">
                            <option value="0">Selecione um número de andar</option>
                            <?php
$_smarty_tpl->tpl_vars['local'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['local']->step = 1;$_smarty_tpl->tpl_vars['local']->total = (int) ceil(($_smarty_tpl->tpl_vars['local']->step > 0 ? 19+1 - (1) : 1-(19)+1)/abs($_smarty_tpl->tpl_vars['local']->step));
if ($_smarty_tpl->tpl_vars['local']->total > 0) {
for ($_smarty_tpl->tpl_vars['local']->value = 1, $_smarty_tpl->tpl_vars['local']->iteration = 1;$_smarty_tpl->tpl_vars['local']->iteration <= $_smarty_tpl->tpl_vars['local']->total;$_smarty_tpl->tpl_vars['local']->value += $_smarty_tpl->tpl_vars['local']->step, $_smarty_tpl->tpl_vars['local']->iteration++) {
$_smarty_tpl->tpl_vars['local']->first = $_smarty_tpl->tpl_vars['local']->iteration === 1;$_smarty_tpl->tpl_vars['local']->last = $_smarty_tpl->tpl_vars['local']->iteration === $_smarty_tpl->tpl_vars['local']->total;?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['local']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['local']->value;?>
º andar</option>
                            <?php }
}
?>    
                        </select>        
                    </div>   
                <?php }?>      
            </div>              
            <div class="form-group">
                <label for="cd_tp_contrato" class="control-label col-md-4">Tipo Contrato:</label> 
                <div class="col-md-5">
                    <select id="cd_tp_contrato" name="cd_tp_contrato" class="select form-control" required="required">
                        <option value="0">Selecione o tipo de contrato</option>
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos_contrato']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['cd_tipo_contrato']->value == $_smarty_tpl->tpl_vars['t']->value['cd_tipo_contrato']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['cd_tipo_contrato'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['t']->value['nm_tipo_contrato'];?>
</option>
                            <?php } else { ?>    
                                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['cd_tipo_contrato'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['nm_tipo_contrato'];?>
</option>
                            <?php }?>
                        
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="cd_curso" class="control-label col-md-4">Curso:</label> 
                <div class="col-md-5">
                    <select id="cd_curso" name="cd_curso" class="select form-control" required="required">
                        <option value="0">Selecione um Curso</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['curso']->value, 'cur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cur']->value) {
?> 
                            
                            <?php if ($_smarty_tpl->tpl_vars['cd_curso']->value == $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg'];?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['cur']->value['nm_extenso_crg'], 'UTF-8');?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg'];?>
"><?php echo $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg'];?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['cur']->value['nm_extenso_crg'], 'UTF-8');?>
</option>                                
                            <?php }?>
                            
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                         
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="qt_estagiario" class="control-label col-md-4">Quantidade de Estagiários</label> 
                <div class="col-md-1">
                    <select id="qt_estagiario" name="qt_estagiario" class="select form-control" required="required">
                        <?php if ($_smarty_tpl->tpl_vars['qt_estagiario']->value == 1) {?>
                            <option value="1" selected>1</option>
                        <?php } else { ?>
                            <option value="1">1</option>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['qt_estagiario']->value == 2) {?>
                            <option value="2" selected>2</option>
                        <?php } else { ?>
                            <option value="2">2</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nu_matricula_supervisor" class="control-label col-md-4">Matrícula Supervisor:</label> 
                <div class="col-md-2">                      
                    <input id="nu_matricula_supervisor" 
                           name="nu_matricula_supervisor" 
                           placeholder="Matrícula Supervisor" 
                           type="text" 
                           class="form-control" 
                           required="required" 
                           maxlength="7" 
                           size="7"
                           value="<?php echo $_smarty_tpl->tpl_vars['nu_matricula_supervisor']->value;?>
">
                </div>
            </div>
            <div class="form-group">
                <label for="cd_lotacao_estagiario" class="control-label col-md-4">Centro de Custo Estagiário:</label> 
                <div class="col-md-2">
                    <input id="cd_lotacao_estagiario" 
                           name="cd_lotacao_estagiario" 
                           placeholder="Centro de Custo Estagiário" 
                           type="text" 
                           class="form-control" 
                           required="required" 
                           maxlength="5" 
                           size="5"
                           value="<?php echo $_smarty_tpl->tpl_vars['cd_lotacao_estagiario']->value;?>
">
                </div>
            </div> 
            <div class="col-md-offset-4 col-md-8">
                <input type="button" id="enviar_requisicao" name="enviar_requisicao" class="btn btn-primary" value="Enviar">
                <input type="hidden" type="text" class="btn btn-primary" name="form_enviado" id="form_enviado" value="1">
                <input type="hidden" type="text" class="btn btn-primary" name="qt_registros_local" id="qt_registros_local" value="<?php echo $_smarty_tpl->tpl_vars['qt_registros_local']->value;?>
">
                <input type="hidden" type="text" class="btn btn-primary" name="id_protocolo" id="id_protocolo" value="<?php echo $_smarty_tpl->tpl_vars['id_protocolo']->value;?>
">
                <input type="hidden" type="text" class="btn btn-primary" name="id_requisicao" id="id_requisicao" value="<?php echo $_smarty_tpl->tpl_vars['id_requisicao']->value;?>
">
                <input type="hidden" type="text" class="btn btn-primary" name="id_supervisor" id="id_supervisor" value="<?php echo $_smarty_tpl->tpl_vars['id_supervisor']->value;?>
">
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

<?php
}
}
/* {/block "page-content"} */
}
