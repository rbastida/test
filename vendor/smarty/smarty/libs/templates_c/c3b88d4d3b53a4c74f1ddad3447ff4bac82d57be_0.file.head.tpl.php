<?php
/* Smarty version 3.1.32, created on 2019-03-22 11:13:39
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c94ed93ecd0b3_72133845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b88d4d3b53a4c74f1ddad3447ff4bac82d57be' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/head.tpl',
      1 => 1553264015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c94ed93ecd0b3_72133845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2446349865c94ed93ec5f20_08844269', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_470580645c94ed93ec97f6_97381931', "js");
?>





    
<?php }
/* {block "css"} */
class Block_2446349865c94ed93ec5f20_08844269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_2446349865c94ed93ec5f20_08844269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../../../../bootstrap-3/style2.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_470580645c94ed93ec97f6_97381931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_470580645c94ed93ec97f6_97381931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- Font Awesome JS -->
    <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Jquery -->
    <?php echo '<script'; ?>
 src="../../../../../node_modules/bootstrap/dist/js/../../../jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>    
    
    <!-- Bootstrap -->
    <?php echo '<script'; ?>
 src="../../../../../node_modules/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>    

    <!-- Cleave.js -->
    <?php echo '<script'; ?>
 src="https://nosir.github.io/cleave.js/dist/cleave.min.js"><?php echo '</script'; ?>
>              

    <!-- jQuery Custom Scroller CDN -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>    
    

    
<?php
}
}
/* {/block "js"} */
}
