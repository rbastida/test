<?php
/* Smarty version 3.1.32, created on 2019-01-02 10:46:48
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-requisicao-altera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2cb2b8b74930_62465438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939a608cfc393de2f9a80afc4625450cd6956d20' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-requisicao-altera.tpl',
      1 => 1546433196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2cb2b8b74930_62465438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11977721715c2cb2b8b39237_84079259', "page-content");
?>
  


<?php }
/* {block "page-content"} */
class Block_11977721715c2cb2b8b39237_84079259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_11977721715c2cb2b8b39237_84079259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    

    
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {

        $('#enviar').click(function() {
            $('.table-data').show();
        });
        
    });    
    
    <?php echo '</script'; ?>
>
                            
                            

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
                    <span><h5>Cadastro de Requisições - Alteração</h5></span><hr>
                </div>
            </div>
            <div class="form-group">
                <label for="nu_protocolo" class="control-label col-md-4">Digite o Número do Protocolo:</label> 
                <div class="col-md-2">
                    <input id="nu_protocolo" name="nu_protocolo" placeholder="Número do Protocolo" type="text" class="form-control input-protocolo">
                </div>               
            </div>          
            <div class="col-md-offset-4 col-md-8">
                <input type="submit" id="enviar" name="enviar" class="btn btn-primary" value="Enviar">
                <input type="hidden" type="text" class="btn btn-primary" name="form_pesquisa" id="form_pesquisa" value="1">
                <input type="hidden" type="text" class="btn btn-primary" name="nome_sec" id="nome_sec" value="<?php echo $_smarty_tpl->tpl_vars['protocolo']->value['nome_secretaria'];?>
">
            </div>

        </form>

        <div class="col-md-12">
            <?php if ($_smarty_tpl->tpl_vars['qt']->value > 0) {?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome da Secretaria</th>
                        <th>Número do Protocolo</th>
                        <th>Quantidade de Estagiários</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['protocolo']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?> 
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['p']->value['nome_secretaria'];?>
</td>
                        <td><a href="requisicao_altera_editar.php?id_protocolo=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_protocolo'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nu_protocolo_ano'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['nu_protocolo_origem'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['nu_protocolo_numero'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['p']->value['qt_estagiario'];?>
</td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                </tbody>
            </table>
            <?php } else { ?>
                <span>Nenhum protocolo encontrado com este número!</span>            
            <?php }?>
        </div>
    </div>

<?php
}
}
/* {/block "page-content"} */
}
