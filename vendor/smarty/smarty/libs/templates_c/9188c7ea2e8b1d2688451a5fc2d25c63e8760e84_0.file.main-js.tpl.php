<?php
/* Smarty version 3.1.32, created on 2018-09-19 10:47:30
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/main-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba2537212b2f8_41262290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9188c7ea2e8b1d2688451a5fc2d25c63e8760e84' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/main-js.tpl',
      1 => 1537364339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba2537212b2f8_41262290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5553093775ba25372128e73_97413391', "main-js");
}
/* {block "main-js"} */
class Block_5553093775ba25372128e73_97413391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main-js' => 
  array (
    0 => 'Block_5553093775ba25372128e73_97413391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

    <?php echo '</script'; ?>
>  
       
<?php
}
}
/* {/block "main-js"} */
}
