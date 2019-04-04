<?php
/* Smarty version 3.1.32, created on 2019-01-04 16:14:59
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/encaminhamento_cadastra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2fa2a388c274_98558901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2427e92df88626799a0d0715106ac0aacf484fc4' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/encaminhamento_cadastra.tpl',
      1 => 1546623358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:main-js.tpl' => 1,
    'file:form-encaminhamento-cadastra.tpl' => 1,
  ),
),false)) {
function content_5c2fa2a388c274_98558901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:main-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form-encaminhamento-cadastra.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
