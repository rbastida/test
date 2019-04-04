<?php
/* Smarty version 3.1.32, created on 2018-11-14 10:30:22
  from '/var/www/estagiarios/form-requisicao-pesquisa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec155e656924_55732817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3017f9b22785d5c26baec63a00ca8473d3ea051d' => 
    array (
      0 => '/var/www/estagiarios/form-requisicao-pesquisa.tpl',
      1 => 1542198347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec155e656924_55732817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5584967705bec155e616558_03093366', "page-content");
?>
  


<?php }
/* {block "page-content"} */
class Block_5584967705bec155e616558_03093366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_5584967705bec155e616558_03093366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            
        });
    <?php echo '</script'; ?>
>

    <style>
        div.alert {
            display: none;
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
            <div class="form-group">
                <label for="nu_protocolo" class="control-label col-md-4">Digite o Número do Protocolo:</label> 
                <div class="col-md-2">
                    <input id="nu_protocolo" name="nu_protocolo" placeholder="Número Protocolo" type="text" class="form-control input-protocolo">
                </div>
            </div>
          
            <div class="col-md-offset-4 col-md-8">
                <input type="text" id="enviar" name="enviar" class="btn btn-primary" value="Enviar">
                <input type="hidden" type="text" class="btn btn-primary" name="form_enviado" id="form_enviado">
            </div>
        </form>
    </div>
    
<?php
}
}
/* {/block "page-content"} */
}
