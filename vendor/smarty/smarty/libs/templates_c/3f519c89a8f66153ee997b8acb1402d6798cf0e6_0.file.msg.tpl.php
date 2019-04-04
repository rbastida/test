<?php
/* Smarty version 3.1.32, created on 2018-10-01 16:45:06
  from '/var/www/estagiarios/msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb279424ec228_16328903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f519c89a8f66153ee997b8acb1402d6798cf0e6' => 
    array (
      0 => '/var/www/estagiarios/msg.tpl',
      1 => 1538423077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb279424ec228_16328903 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<!-- MODAL ALERT -->
<div id="alert-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['modal_title']->value;?>
</h4>
            </div>
            <div class="modal-body alert-content">
                <h4 class="modal-title"><span name="AlertId" id="ReuniaoId">Campo <?php echo $_smarty_tpl->tpl_vars['modal_campo']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['modal_msg']->value;?>
</h4>
            </div>                
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>    
<!-- // MODAL ALERT -->                <?php }
}
