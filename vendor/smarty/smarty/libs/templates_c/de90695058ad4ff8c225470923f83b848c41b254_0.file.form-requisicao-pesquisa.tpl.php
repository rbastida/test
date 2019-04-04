<?php
/* Smarty version 3.1.32, created on 2018-12-11 16:27:20
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-requisicao-pesquisa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c100188b66446_40175663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de90695058ad4ff8c225470923f83b848c41b254' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-requisicao-pesquisa.tpl',
      1 => 1544552364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c100188b66446_40175663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14365442025c100188b4fde0_17421730', "page-content");
?>
  <?php }
/* {block "page-content"} */
class Block_14365442025c100188b4fde0_17421730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_14365442025c100188b4fde0_17421730',
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

        <div class="col-md-12">
            <p>qtde de registros1=<?php echo $_smarty_tpl->tpl_vars['qt']->value;?>
</p>

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
                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['nu_protocolo_numero'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['nu_protocolo_origem'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['nu_protocolo_ano'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['qt_estagiario'];?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
                </tbody>
            </table>
            <?php }?>
            <p>qtde de registros2=<?php echo $_smarty_tpl->tpl_vars['qt']->value;?>
</p>

        </div>
            
    </div>

<?php
}
}
/* {/block "page-content"} */
}
