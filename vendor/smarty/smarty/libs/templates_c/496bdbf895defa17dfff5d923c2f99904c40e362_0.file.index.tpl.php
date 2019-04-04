<?php
/* Smarty version 3.1.32, created on 2018-11-21 11:58:46
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf56496b8b580_81498661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '496bdbf895defa17dfff5d923c2f99904c40e362' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/index.tpl',
      1 => 1542808723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:main-js.tpl' => 1,
    'file:form-index.tpl' => 1,
  ),
),false)) {
function content_5bf56496b8b580_81498661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:main-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form-index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
