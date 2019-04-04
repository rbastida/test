<?php
/* Smarty version 3.1.32, created on 2019-04-03 16:59:06
  from '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-encaminhamento-cadastra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca5108aeaa4b6_25702048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a0ac711e4128a15c7cd3fbd0d36e5017bcc807' => 
    array (
      0 => '/var/www/estagiarios/vendor/smarty/smarty/libs/templates/form-encaminhamento-cadastra.tpl',
      1 => 1554321545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca5108aeaa4b6_25702048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12551592835ca5108ae9e096_76117153', "page-content");
?>
  <?php }
/* {block "page-content"} */
class Block_12551592835ca5108ae9e096_76117153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-content' => 
  array (
    0 => 'Block_12551592835ca5108ae9e096_76117153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    

    <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function() {

            var numero_protocolo    = new Cleave('.input-protocolo', {
                delimiters: ['/', '/'],
                blocks: [2, 2, 5],
                uppercase: true
            });

            $("#nu_protocolo").focusout(function() {

                var dados = 'protocolo=' + $(this).val();

                $.ajax({
                    type:           'POST',
                    dataType:       'text',
                    async:          true,
                    url:            'ajax.consulta_requisicao_estagiario.php',
                    data:           dados,
                    success: function (response) {
                        
                        //var obj = json.PARSE(response);
                        // var obj = response; 
                         
                        console.log(response)  ;
                        
                        
                        
                        console.log((response.indexOf(1)  ));
                        
                        


//                        
//                        $('#nm_curso').text(obj.estagiario_cd_curso);                        

                    }
                });

            });
        });

    <?php echo '</script'; ?>
>

    <style>
        div.alert {
            display: none;
        }

        .modal.custom {
            outline:none;

        }

        .modal.custom .modal-dialog {
            width:50%;
            margin:0 auto;
        }            
    </style>
    

    <!-- Page Content  -->
    <div id="content">

        <div id="responsecontainer">
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Desliza barra lateral</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Requisições</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Encaminhamentos</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <form id="form_requisicao" class="form-horizontal" action="" method="POST">

            <div class="form-group">                
                <div class="col-md-12">
                    <span><h5>Cadastro de Encaminhamentos</h5></span><hr>
                </div>
            </div>            
            <div class="alert alert-danger">
                <span>Erro!</span>
            </div>
            <div class="form-group mostra_protocolo">
                <label for="nu_protocolo" class="control-label col-md-4">Número Protocolo:</label> 
                <div class="col-md-2">
                    <input type="text" id="nu_protocolo" name="nu_protocolo" placeholder="Número Protocolo" type="text" class="form-control input-protocolo">
                </div>
            </div>
            <div class="form-group">
                <label for="nm_nome_estagiario" class="control-label col-md-4">Nome Estagiário:</label> 
                <div class="col-md-2">
                     <input type="text" id="nm_nome_estagiario" name="nm_nome_estagiario" placeholder="Nome Completo" type="text" required="required" class="form-control input-data">
                </div>
            </div>
            <div class="form-group">
                <label for="nu_cpf" class="control-label col-md-4">CPF:</label> 
                <div class="col-md-2">
                     <input type="text" id="nu_cpf" name="nu_cpf" placeholder="CPF" type="text" required="required" class="form-control input-data">
                </div>
            </div>
            <div class="form-group">
                <label for="nm_curso" class="control-label col-md-4">Curso:</label> 
                <span name="nm_curso" id="nm_curso"></span>
            </div>
            <div class="form-group col-md-offset-4 col-md-8">
                <input type="button" id="enviar_encaminhamento" name="enviar_encaminhamento" class="btn btn-primary" value="Enviar">
                <input type="hidden" id="form_enviado" name="form_enviado" class="btn btn-primary" value="1">
                <input type="hidden" id="qt_registros2" name="qt_registros2" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['qt_registros']->value;?>
 ">
                <input type="hidden" id="local2" name="local2"class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['local']->value;?>
 ">
            </div>
        </form>
    </div>

<?php
}
}
/* {/block "page-content"} */
}
