<?php
/* Smarty version 3.1.32, created on 2018-10-01 16:45:06
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/alert-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb279424dba78_12615487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e04d94117981d072e4190f1613339aa87cba19e' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/alert-modal.tpl',
      1 => 1538423000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:msg.tpl' => 1,
  ),
),false)) {
function content_5bb279424dba78_12615487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
