<?php
/* Smarty version 3.1.32, created on 2019-03-22 11:13:39
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c94ed93ee3b09_59809613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed50a7383894013abbacb7b5d750d5d8849e9555' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/sidebar.tpl',
      1 => 1553263962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c94ed93ee3b09_59809613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5997207545c94ed93ed21c9_45854691', "sidebar");
}
/* {block "sidebar"} */
class Block_5997207545c94ed93ed21c9_45854691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_5997207545c94ed93ed21c9_45854691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3><?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
</h3>
    </div>

    <ul class="list-unstyled components">
        <p><?php echo $_smarty_tpl->tpl_vars['header_name']->value;?>
</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['menu1']->value;?>
</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link1_option1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu1_option1']->value;?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link1_option2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu1_option2']->value;?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link1_option3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu1_option3']->value;?>
</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['menu2']->value;?>
</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link2_option1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu2_option1']->value;?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link2_option2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu2_option2']->value;?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link2_option3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu2_option3']->value;?>
</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['menu3']->value;?>
</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link3_option1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu3_option1']->value;?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link3_option2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu3_option2']->value;?>
</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['link3_option3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menu3_option3']->value;?>
</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
                    
<?php
}
}
/* {/block "sidebar"} */
}
