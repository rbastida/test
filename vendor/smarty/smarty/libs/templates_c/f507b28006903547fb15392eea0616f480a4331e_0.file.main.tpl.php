<?php
/* Smarty version 3.1.32, created on 2018-11-14 14:41:06
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec5022546aa2_71670110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f507b28006903547fb15392eea0616f480a4331e' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/main.tpl',
      1 => 1542213138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec5022546aa2_71670110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1463856815bec50225390e8_90829267', "css");
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16310709175bec502253b6e9_61995301', "js");
?>

</head>

<body>
    <div class="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21248023895bec5022541321_28936102', "sidebar");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19947739225bec5022543418_53626387', "page-content");
?>
        
    </div>
        
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19439204475bec5022545155_25526412', "main-js");
?>


</body>
</html><?php }
/* {block "css"} */
class Block_1463856815bec50225390e8_90829267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1463856815bec50225390e8_90829267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_16310709175bec502253b6e9_61995301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_16310709175bec502253b6e9_61995301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "js"} */
/* {block "sidebar"} */
class Block_21248023895bec5022541321_28936102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_21248023895bec5022541321_28936102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "sidebar"} */
/* {block "page-content"} */
class Block_19947739225bec5022543418_53626387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_19947739225bec5022543418_53626387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "page-content"} */
/* {block "main-js"} */
class Block_19439204475bec5022545155_25526412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main-js' => 
  array (
    0 => 'Block_19439204475bec5022545155_25526412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "main-js"} */
}
