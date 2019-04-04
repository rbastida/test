<?php
require_once __DIR__ . '/inc/i_top.php';
require_once __DIR__ . '/vendor/autoload.php';

//    $nu_protocolo = $_POST['protocolo'];
//
//    $nu_protocolo_ano           = substr($nu_protocolo, 0, 2);
//    $nu_protocolo_origem        = substr($nu_protocolo, 3, 2);
//    $nu_protocolo_numero        = substr($nu_protocolo, 6, 5);    
    
    $nu_protocolo_ano       = '20';
    $nu_protocolo_origem    = '40';
    $nu_protocolo_numero    = '61000';
    
    $conn = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY PROTOCOLO
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $sql_prot = "
    SELECT
    p.nu_protocolo_ano        as protocolo_ano,
    p.nu_protocolo_numero     as protocolo_numero,
    p.nu_protocolo_origem     as protocolo_origem,
    s.nm_secretaria_extenso   as secretaria,
    l.nm_local_estagio        as local_estagio,
    r.cd_curso                as cd_curso
    FROM
    tb_protocolo p
    INNER JOIN tb_requisicao r    ON p.id_protocolo     = r.id_protocolo
    INNER JOIN tb_secretaria s 	  ON s.cd_secretaria    = r.cd_secretaria
    INNER JOIN tb_local_estagio l ON l.id_local_estagio = r.id_local_estagio
    INNER JOIN tb_supervisor u    ON u.id_supervisor    = r.id_supervisor
    WHERE
    p.nu_protocolo_ano      = :nu_protocolo_ano AND
    p.nu_protocolo_origem   = :nu_protocolo_origem AND
    p.nu_protocolo_numero   = :nu_protocolo_numero";
    $stmt_prot = $conn->prepare($sql_prot);
    $stmt_prot->bindValue(':nu_protocolo_ano', $nu_protocolo_ano);
    $stmt_prot->bindValue(':nu_protocolo_origem', $nu_protocolo_origem);
    $stmt_prot->bindValue(':nu_protocolo_numero', $nu_protocolo_numero);
    $stmt_prot->execute();
    $rs_prot = $stmt_prot->fetchAll(PDO::FETCH_ASSOC);
    $c_prot = count($rs_prot);

    if ($c_prot > 0) {

        $rs = json_encode($rs_prot);
        echo $rs;

    } else {

        echo NULL;

    }

    

