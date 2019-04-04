<?php
/* Smarty version 3.1.32, created on 2019-02-23 00:23:34
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/consulta_estagiarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c70bcb6e78f57_20510377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f03983e6bf9cccb64038df9088ecb29fbf8888' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/consulta_estagiarios.tpl',
      1 => 1550889480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:main-js.tpl' => 1,
    'file:form-consulta-estagiarios.tpl' => 1,
  ),
),false)) {
function content_5c70bcb6e78f57_20510377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:main-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form-consulta-estagiarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
