<?php
/* Smarty version 3.1.32, created on 2018-11-27 11:15:42
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/teste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfd437e17a922_92409285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72eb8767b7fae2da17f36667f6c61d77898e7275' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/teste.tpl',
      1 => 1543324405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd437e17a922_92409285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17846259765bfd437e14cd99_87214323', "page-content");
?>
  


<?php }
/* {block "page-content"} */
class Block_17846259765bfd437e14cd99_87214323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_17846259765bfd437e14cd99_87214323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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

            <div class="alert alert-danger" role="alert">

            </div>                        

            <div class="form-group">                
                <div class="col-md-12">
                    <span><h5>Cadastro de Requisições</h5></span><hr>
                </div>
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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secretarias']->value, 'sec');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sec']->value) {
?> 
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sec']->value['cd_secretaria'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['sec']->value['nm_secretaria'], 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                    </select>
                </div>
            </div>
            <div class="form-group">

                <?php if (isset($_smarty_tpl->tpl_vars['qt_registros']->value) && $_smarty_tpl->tpl_vars['qt_registros']->value > 0) {?>
                    <label for="nm_local_estagio" class="control-label col-md-4">Local das Atividades:</label>                     
                    <div class="col-md-5">
                        <select id="id_local_estagio" name="id_local_estagio" class="select form-control" required="required">
                            <option value="0">Selecione um Local de Estágio</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['local']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?> 
                                <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['id_local_estagio'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['l']->value['nm_local_estagio'], 'UTF-8');?>
 - <?php echo $_smarty_tpl->tpl_vars['l']->value['nu_andar'];?>
º andar</option>
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
                        <option value="1">Nova Vaga</option>
                        <option value="2">Reposição</option>
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg'];?>
"><?php echo $_smarty_tpl->tpl_vars['cur']->value['cd_ident_crg'];?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['cur']->value['nm_extenso_crg'], 'UTF-8');?>
</option>
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
                        <option value="1">1</option>
                        <option value="2">2</option>
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
                    <input id="cd_lotacao_estagiario" name="cd_lotacao_estagiario" type="text" class="form-control" required="required" maxlength="5" size="5">
                </div>
            </div> 
            <div class="col-md-offset-4 col-md-8">
                <input type="button" id="enviar_requisicao" name="enviar_requisicao" class="btn btn-primary" value="Enviar">
                <input type="hidden" type="text" class="btn btn-primary" name="form_enviado" id="form_enviado" value="1">
            </div>
        </form>
    </div>

    <!-- MODAL ALERT -->
    <div class="modal" id="alert-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Modal body text goes here.</h4>
                </div>
                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div> 
    <!-- // MODAL ALERT -->      
    
<?php
}
}
/* {/block "page-content"} */
}
