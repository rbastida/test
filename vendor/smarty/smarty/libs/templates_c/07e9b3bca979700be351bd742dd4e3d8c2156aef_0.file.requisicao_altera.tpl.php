<?php
/* Smarty version 3.1.32, created on 2018-11-27 09:58:04
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/requisicao_altera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfd314c31ec76_99287267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07e9b3bca979700be351bd742dd4e3d8c2156aef' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/requisicao_altera.tpl',
      1 => 1543257398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:main-js.tpl' => 1,
    'file:form-requisicao-altera.tpl' => 1,
  ),
),false)) {
function content_5bfd314c31ec76_99287267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:main-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form-requisicao-altera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
