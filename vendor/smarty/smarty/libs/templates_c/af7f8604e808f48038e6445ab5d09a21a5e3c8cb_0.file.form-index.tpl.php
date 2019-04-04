<?php
/* Smarty version 3.1.32, created on 2018-11-12 11:48:38
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be984b619c522_26768592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7f8604e808f48038e6445ab5d09a21a5e3c8cb' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-index.tpl',
      1 => 1542030487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be984b619c522_26768592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16102756825be984b61988f9_25590692', "page-content");
?>
  <?php }
/* {block "page-content"} */
class Block_16102756825be984b61988f9_25590692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_16102756825be984b61988f9_25590692',
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
        
    </div>

<?php
}
}
/* {/block "page-content"} */
}
