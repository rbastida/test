<?php
require_once __DIR__ . '/../inc/i_top.php';
require_once __DIR__ . '/../inc/conexao.php';

$conn = conn();

if (isset($_POST['importSubmit'])) {

    //validate whether uploaded file is a csv file
    $csvMimes = array(
    'text/x-comma-separated-values', 
    'text/comma-separated-values', 
    'application/octet-stream', 
    'application/vnd.ms-excel', 
    'application/x-csv', 
    'text/x-csv', 
    'text/csv', 
    'application/csv', 
    'application/excel', 
    'application/vnd.msexcel', 
    'text/plain');

    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {

        if (is_uploaded_file($_FILES['file']['tmp_name'])) {

            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            //skip first line
            fgetcsv($csvFile);

            //parse data from csv file line by line
            while (($line = fgetcsv ($csvFile, 8000, ";")) !== FALSE) {

                $query1 = "SELECT * FROM CARGA WHERE CCUSTO = :ccusto";
                $stmt   = $conn->prepare($query1);
                $stmt->bindValue(':ccusto', $line[0]);
                $stmt->execute();
                $number_of_rows = $stmt->rowCount();     

//                echo 'number rows='.$number_of_rows.'<br>';
//                exit();
                
                if ($number_of_rows > 0) {

                    $query1 = "UPDATE CARGA SET SECRETARIA = :secretaria, SIGLA = :sigla, ESTRUTURA = :estrutura, CDSECRETARIA = :cdsecretarias WHERE CCUSTO = :ccusto";
                    $stmt = $conn->prepare($query1);
                    $stmt->bindValue(':ccusto',       $line[0]);
                    $stmt->bindValue(':secretaria',   $line[1]);
                    $stmt->bindValue(':sigla',        $line[2]);
                    $stmt->bindValue(':estrutura',    $line[3]);
                    $stmt->bindValue(':cdsecretaria', $line[4]);
                    $stmt->execute();
                    
                } else {
                    
                    $query2 = "INSERT INTO CARGA(CCUSTO, SECRETARIA, SIGLA, ESTRUTURA, CDSECRETARIA) VALUES (:ccusto, :secretaria, :sigla, :estrutura, :cdsecretaria)";
                    $stmt2 = $conn->prepare($query2);
                    $stmt2->bindValue(':ccusto',       $line[0]);
                    $stmt2->bindValue(':secretaria',   $line[1]);
                    $stmt2->bindValue(':sigla',        $line[2]);
                    $stmt2->bindValue(':estrutura',    $line[3]);
                    $stmt2->bindValue(':cdsecretaria', $line[4]);
                    $stmt2->execute();
                    
                }
            }

            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        } else {
            $qstring = '?status=err';
        }
    } else {
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: rotina_importacao_centro_custo.php".$qstring);