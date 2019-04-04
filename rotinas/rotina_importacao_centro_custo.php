<?php
require_once __DIR__ . '/../inc/i_top.php';
require_once __DIR__ . '/../inc/conexao.php';

$conn = conn();

if (!empty($_GET['status'])) {

    switch ($_GET['status']) {
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Dados foram inseridos com sucesso!';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Algum problema ocorreu, por favor tente novamente!';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Por favor faça o upload de um arquivo CSV válido!.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>

<style type="text/css">

    .wrapper {
        grid-column-gap: 10px;
    }

    [hidden] {
        display: none !important;
    }


</style>

<script type="text/javascript">

    $(document).ready(function () {

    });

</script>

<div class="container wrapper">&nbsp;</div>

<div class="container">

    <div class="row">
        <div class="col-md-12">

            <?php
            if (!empty($statusMsg)) {
                echo '<div class="alert ' . $statusMsgClass . '">' . $statusMsg . '</div>';
            }
            ?>

            <div class="panel panel-default">

                <div class="panel-heading">
                    <p>
                        Rotina de Importação de Centro de Custo
                        <a class="btn btn-primary pull-right" href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Visualizar</a>
                    </p>
                </div>

                <div class="panel-body">

                    <form action="importData_centro_custo.php" method="post" enctype="multipart/form-data" id="importFrm">
                        <input type="file" name="file" />
                        <input type="submit" class="btn btn-primary" name="importSubmit" value="Importar">
                    </form>
                    
                    
                    <div class="container wrapper">&nbsp;</div>

                    <table id="mytable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Centro Custo</th>
                                <th>Secretaria</th>
                                <th>Sigla</th>
                                <th>Estrutura</th>
                                <th>Codigo Secretaria</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // get records from database
                            $query = "SELECT * FROM CARGA ORDER BY CCUSTO";
                            $rs = $conn->prepare($query);
                            $rs->execute();
                            $number_of_rows = $rs->rowCount();

                            if ($number_of_rows > 0) {

                                foreach ($rs as $value) {
                                    ?>

                                    <tr>
                                        <td><?php echo $value['ID']; ?></td>
                                        <td><?php echo $value['CCUSTO']; ?></td>
                                        <td><?php echo $value['SECRETARIA']; ?></td>
                                        <td><?php echo $value['SIGLA']; ?></td>
                                        <td><?php echo $value['ESTRUTURA']; ?></td>
                                        <td><?php echo $value['CDSECRETARIA']; ?></td>
                                    </tr>

                                    <?php
                                }
                            } else {
                                ?>

                                <tr><td colspan="5">No member(s) found.....</td></tr>

                                <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//redirect to the listing page
//header("Location: index_rotina_importacao.php".$qstring);