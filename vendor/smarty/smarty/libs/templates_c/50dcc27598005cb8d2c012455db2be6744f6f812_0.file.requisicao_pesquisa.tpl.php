<?php
/* Smarty version 3.1.32, created on 2018-12-11 12:03:56
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/requisicao_pesquisa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0fc3cc1fa4c1_40411788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50dcc27598005cb8d2c012455db2be6744f6f812' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/requisicao_pesquisa.tpl',
      1 => 1544528794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:main-js.tpl' => 1,
    'file:form-requisicao-pesquisa.tpl' => 1,
  ),
),false)) {
function content_5c0fc3cc1fa4c1_40411788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:main-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form-requisicao-pesquisa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
