{block name="page-content"}
    
    
{literal}
    
    <script type="text/javascript">
    $(document).ready(function () {

        $('#enviar').click(function() {
            $('.table-data').show();
        });
        
    });    
    
    </script>
                            
{/literal}                            

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

        <form id="form_requisicao" class="form-horizontal" action="{$form_action}" method="POST">

            <div class="form-group">                
                <div class="col-md-12">
                    <span><h5>Cadastro de Requisições - Alteração</h5></span><hr>
                </div>
            </div>
            <div class="form-group">
                <label for="nu_protocolo" class="control-label col-md-4">Digite o Número do Protocolo:</label> 
                <div class="col-md-2">
                    <input id="nu_protocolo" name="nu_protocolo" placeholder="Número do Protocolo" type="text" class="form-control input-protocolo">
                </div>               
            </div>          
            <div class="col-md-offset-4 col-md-8">
                <input type="submit" id="enviar" name="enviar" class="btn btn-primary" value="Enviar">
                <input type="hidden" type="text" class="btn btn-primary" name="form_pesquisa" id="form_pesquisa" value="1">
                <input type="hidden" type="text" class="btn btn-primary" name="nome_sec" id="nome_sec" value="{$protocolo.nome_secretaria}">
            </div>

        </form>

        <div class="col-md-12">
            {if $qt > 0}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome da Secretaria</th>
                        <th>Número do Protocolo</th>
                        <th>Quantidade de Estagiários</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $protocolo as $p} 
                    <tr>
                        <td>{$p.nome_secretaria}</td>
                        <td><a href="requisicao_altera_editar.php?id_protocolo={$p.id_protocolo}">{$p.nu_protocolo_ano} - {$p.nu_protocolo_origem} - {$p.nu_protocolo_numero}</a></td>
                        <td>{$p.qt_estagiario}</td>
                    </tr>
                    {/foreach}                
                </tbody>
            </table>
            {else}
                <span>Nenhum protocolo encontrado com este número!</span>            
            {/if}
        </div>
    </div>

{/block}  


