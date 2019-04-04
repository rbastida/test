<?php
require_once __DIR__ . '/i_top.php';

function insere_protocolo($nu_protocolo_numero, $nu_protocolo_origem, $nu_protocolo_ano, $dt_protocolo_ymd) {
    
    $conn = conn();
    
    $query1 = "
    SELECT
    p.id_protocolo
    FROM
    tb_protocolo p
    WHERE 
    p.nu_protocolo_ano       = :nu_protocolo_ano AND
    p.nu_protocolo_numero    = :nu_protocolo_numero AND
    p.nu_protocolo_origem    = :nu_protocolo_origem";
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindValue(':nu_protocolo_ano',          $nu_protocolo_ano);
    $stmt1->bindValue(':nu_protocolo_numero',       $nu_protocolo_numero);
    $stmt1->bindValue(':nu_protocolo_origem',       $nu_protocolo_origem);
    $stmt1->execute(); 
    $rs1     = $stmt1->fetch();    
    $c1      = count($rs1['id_protocolo']);    
    
    if (($c1 == '') || ($c1 == 0)) {
        
        $query = "
        INSERT INTO tb_protocolo(nu_protocolo_ano, nu_protocolo_numero, nu_protocolo_origem, dt_protocolo) 
        VALUES (:nu_protocolo_ano, :nu_protocolo_numero, :nu_protocolo_origem, :dt_protocolo)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':nu_protocolo_numero',   $nu_protocolo_numero);
        $stmt->bindValue(':nu_protocolo_origem',   $nu_protocolo_origem);
        $stmt->bindValue(':nu_protocolo_ano',      $nu_protocolo_ano);
        $stmt->bindValue(':dt_protocolo',          $dt_protocolo_ymd);
        $stmt->execute(); 
        $last_id = $conn->lastInsertId('id_protocolo');  
        
        if ($last_id >0) {        
            return($last_id);
        }    

    } 
}

function atualiza_protocolo($id_protocolo, $nu_protocolo_numero, $nu_protocolo_origem, $nu_protocolo_ano, $dt_protocolo_ymd) {
    
    $conn = conn();
    
    $query1 = "
    UPDATE
    tb_protocolo
    SET
    nu_protocolo_numero = :nu_protocolo_numero, 
    nu_protocolo_origem = :nu_protocolo_origem,
    nu_protocolo_ano    = :nu_protocolo_ano,
    dt_protocolo        = :dt_protocolo
    WHERE
    id_protocolo = :id_protocolo";    
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindValue(':id_protocolo',              $id_protocolo);
    $stmt1->bindValue(':dt_protocolo',              $dt_protocolo_ymd);
    $stmt1->bindValue(':nu_protocolo_ano',          $nu_protocolo_ano);
    $stmt1->bindValue(':nu_protocolo_numero',       $nu_protocolo_numero);
    $stmt1->bindValue(':nu_protocolo_origem',       $nu_protocolo_origem);
    $stmt1->execute(); 

}

function insere_supervisor($nu_matricula_supervisor) {
    
    $conn = conn();
    
    $query1 = "
    SELECT
    s.id_supervisor,
    s.nu_matricula_supervisor 
    FROM
    tb_supervisor s
    WHERE 
    s.nu_matricula_supervisor = :nu_matricula_supervisor";
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindValue(':nu_matricula_supervisor',    $nu_matricula_supervisor);
    $stmt1->execute(); 
    $rs      = $stmt1->fetch();    
    $c       = count($rs['nu_matricula_supervisor']);
    
    if ($c == 0) {
        
        $query1 = "
        SELECT
        trim( leading 0 from MATR ) as matricula_supervisor,
        NOME                        as nome_supervisor,
        LOTACAO                     as lotacao_supervisor,
        CODC                        as codigo_cargo_supervisor,
        CARGO                       as cargo_supervisor
        FROM
        tb_cadastro
        WHERE
        trim( leading 0 from MATR ) = :nu_matricula_supervisor";
        $stmt1 = $conn->prepare($query1);
        $stmt1->bindValue(':nu_matricula_supervisor',    $nu_matricula_supervisor);
        $stmt1->execute(); 
        $rs                         = $stmt1->fetch();
        $matricula_supervisor       = $rs['matricula_supervisor'];
        $nome_supervisor            = $rs['nome_supervisor'];
        $lotacao_supervisor         = $rs['lotacao_supervisor'];  
        $codigo_cargo_supervisor    = $rs['codigo_cargo_supervisor'];  
        $cargo_supervisor           = $rs['cargo_supervisor'];  
        
        $query2 = "
        INSERT INTO tb_supervisor
        (nu_matricula_supervisor, nm_nome_supervisor, cd_lotacao_supervisor, cd_cargo_supervisor, nm_cargo_supervisor) 
        VALUES 
        (:nu_matricula_supervisor, :nm_nome_supervisor, :cd_lotacao_supervisor, :codigo_cargo_supervisor, :cargo_supervisor)";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bindValue(':nu_matricula_supervisor',    $matricula_supervisor);
        $stmt2->bindValue(':nm_nome_supervisor',         $nome_supervisor);
        $stmt2->bindValue(':cd_lotacao_supervisor',      $lotacao_supervisor);
        $stmt2->bindValue(':codigo_cargo_supervisor',    $codigo_cargo_supervisor);
        $stmt2->bindValue(':cargo_supervisor',           $cargo_supervisor);
        $stmt2->execute(); 
        $last_id = $conn->lastInsertId('id_protocolo');      

        if ($last_id > 0) {

            return($last_id);
        }        
        
    } else {
        
        return($rs['id_supervisor']); // RETORNA O ID DO SUPERVISOR SE JA EXISTENTE
        
    }
    
}

function atualiza_supervisor($id_supervisor, $nu_matricula_supervisor, $nm_nome_supervisor, $cd_lotacao_supervisor, $cd_cargo_supervisor, $nm_cargo_supervisor) {
    
    $conn = conn();
    
    $query1 = "
    UPDATE
    tb_supervisor
    SET
    nu_matricula_supervisor = :nu_matricula_supervisor, 
    nm_nome_supervisor      = :nm_nome_supervisor,
    cd_lotacao_supervisor   = :cd_lotacao_supervisor,
    cd_cargo_supervisor     = :cd_cargo_supervisor,
    nm_cargo_supervisor     = :nm_cargo_supervisor
    WHERE
    id_supervisor = :id_supervisor";    
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindValue(':id_supervisor',             $id_supervisor);
    $stmt1->bindValue(':nu_matricula_supervisor',   $nu_matricula_supervisor);
    $stmt1->bindValue(':nm_nome_supervisor',        $nm_nome_supervisor);
    $stmt1->bindValue(':cd_lotacao_supervisor',     $cd_lotacao_supervisor);
    $stmt1->bindValue(':cd_cargo_supervisor',       $cd_cargo_supervisor);
    $stmt1->bindValue(':nm_cargo_supervisor',       $nm_cargo_supervisor);
    $stmt1->execute(); 
    $rs1     = $stmt1->fetch(); 
}

function insere_local_estagio($nm_local_estagio, $nu_andar, $nm_observacao) {
    
    $conn = conn();  

//    print "entrou<br>";
//    print "SELECT id_local_estagio FROM tb_local_estagio WHERE nm_local_estagio = trim(".$nm_local_estagio.")<br><br>";
    
    $query1 = "
    SELECT
    id_local_estagio
    FROM
    tb_local_estagio
    WHERE
    nm_local_estagio = trim(:nm_local_estagio)";
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindValue(':nm_local_estagio',       $nm_local_estagio);    
    $stmt1->execute(); 
    $rs      = $stmt1->fetch();
    $c       = count($rs['id_local_estagio']);
    
    if ($c == 0) { // NAO TEM O LOCAL DE ESTAGIO INSERE UM REGISTRO
        
//        print "INSERT INTO tb_local_estagio(nm_local_estagio, nu_andar, nm_observacao) VALUES (".$nm_local_estagio.",".$nu_andar.",".$nm_observacao.")<br><br>";
//    }
    
        $query = "
        INSERT INTO tb_local_estagio(nm_local_estagio, nu_andar, nm_observacao) VALUES (:nm_local_estagio, :nu_andar, :nm_observacao)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':nm_local_estagio',       $nm_local_estagio);
        $stmt->bindValue(':nu_andar',               $nu_andar);
        $stmt->bindValue(':nm_observacao',          $nm_observacao);
        $stmt->execute(); 
        $last_id = $conn->lastInsertId('id_local_estagio');      

        if ($last_id >0) {        
            
            return($last_id);
        }           
        
    } else {
        
        $id_local_estagio = $rs['id_local_estagio']; // SE JA TEM O LOCAL DE ESTAGIO RETORNA SEU ID
        return($id_local_estagio);        
    }    
    
}

function insere_requisicao($id_protocolo, $cd_tp_contrato, $id_supervisor, $cd_secretaria, $id_local_estagio, $cd_curso, $qt_estagiario, $cd_lotacao_estagiario) {
    
    $conn = conn();   
    
    $cd_lotacao_estagiario = strtoupper($cd_lotacao_estagiario);
    
    $query = "
    INSERT INTO 
    tb_requisicao
    (id_protocolo, cd_tipo_contrato, id_supervisor, cd_secretaria, id_local_estagio, cd_curso, qt_estagiario, cd_lotacao_estagiario) 
    VALUES 
    (:id_protocolo, :cd_tipo_contrato, :id_supervisor, :cd_secretaria, :id_local_estagio, :cd_curso, :qt_estagiario, :cd_lotacao_estagiario)";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id_protocolo',           $id_protocolo);
    $stmt->bindValue(':cd_tipo_contrato',       $cd_tp_contrato);
    $stmt->bindValue(':id_supervisor',          $id_supervisor);
    $stmt->bindValue(':cd_secretaria',          $cd_secretaria);
    $stmt->bindValue(':id_local_estagio',       $id_local_estagio);
    $stmt->bindValue(':cd_curso',               $cd_curso);
    $stmt->bindValue(':qt_estagiario',          $qt_estagiario);
    $stmt->bindValue(':cd_lotacao_estagiario',  $cd_lotacao_estagiario);
    $stmt->execute();     
    
}

function atualiza_requisicao($cd_tp_contrato, $cd_secretaria, $cd_curso, $qt_estagiario, $cd_lotacao_estagiario, $id_requisicao) {
    
    $conn = conn();   
    
    $cd_lotacao_estagiario = strtoupper($cd_lotacao_estagiario);
    
    $query1 = "
    UPDATE
    tb_requisicao
    SET
    cd_tipo_contrato        = :cd_tp_contrato, 
    cd_secretaria           = :cd_secretaria,
    cd_curso                = :cd_curso,
    qt_estagiario           = :qt_estagiario,
    cd_lotacao_estagiario   = :cd_lotacao_estagiario
    WHERE
    id_requisicao = :id_requisicao";    
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindValue(':cd_tp_contrato',            $cd_tp_contrato);
    $stmt1->bindValue(':cd_secretaria',             $cd_secretaria);
    $stmt1->bindValue(':cd_curso',                  $cd_curso);
    $stmt1->bindValue(':qt_estagiario',             $qt_estagiario);
    $stmt1->bindValue(':cd_lotacao_estagiario',     $cd_lotacao_estagiario);
    $stmt1->bindValue(':id_requisicao',             $id_requisicao);
    $stmt1->execute(); 
    
}

function lista_secretarias() {

    $conn   = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY SECRETARIA
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $sql_sec = "
    SELECT
    s.cd_secretaria,
    s.nm_secretaria
    FROM
    tb_secretaria s";
    $stmt_sec = $conn->prepare($sql_sec);
    $stmt_sec->execute();
    $rs_sec  = $stmt_sec->fetchAll(PDO::FETCH_ASSOC);    
    $c_sec   = count($rs_sec);

    if ($c_sec > 0) {
        return($rs_sec);
    }    
}

function lista_cargos() {
    
    $conn   = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY CARGO - BUSCA SOMENTE ESTAGIARIOS
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $sql_cargo = "
    SELECT
    c.cd_ident_crg,
    c.nm_extenso_crg
    FROM
    tb_cargo c
    WHERE
    c.cd_ident_crg >= 90700 AND
    c.cd_ident_crg <= 90822
    ORDER BY 2"; 
    $stmt_cargo = $conn->prepare($sql_cargo); 
    $stmt_cargo->execute();
    $rs_cargo  = $stmt_cargo->fetchAll(PDO::FETCH_ASSOC);    
    $c_cargo   = count($rs_cargo);

    if ($c_cargo > 0) {
        return($rs_cargo);
    }
    
}

function lista_locais_estagio() {
    
    $conn   = conn();

    /////////////////////////////////////////////////////////////////////////////////////////
    // QUERY LOCAL ESTAGIO
    /////////////////////////////////////////////////////////////////////////////////////////
    $sql_local = "
    SELECT
    l.id_local_estagio,
    l.nm_local_estagio,
    l.nu_andar
    FROM
    tb_local_estagio l
    ORDER BY
    l.nm_local_estagio"; 
    $stmt_local = $conn->prepare($sql_local); 
    $stmt_local->execute();
    $rs_local  = $stmt_local->fetchAll(PDO::FETCH_ASSOC);    
    $c_local   = count($rs_local);         
    
    if ($c_local > 0) {
        return($rs_local);
    }
    
}

function lista_tipo_contrato() {
    
    $conn   = conn();

    /////////////////////////////////////////////////////////////////////////////////////////
    // QUERY TIPO CONTRATO
    /////////////////////////////////////////////////////////////////////////////////////////
    $sql_tipo = "
    SELECT
    t.cd_tipo_contrato,
    t.nm_tipo_contrato
    FROM
    tb_contrato t
    ORDER BY
    t.cd_tipo_contrato"; 
    $stmt_tipo = $conn->prepare($sql_tipo); 
    $stmt_tipo->execute();
    $rs_tipo   = $stmt_tipo->fetchAll(PDO::FETCH_ASSOC);    
    $c_tipo    = count($rs_tipo);         
    
    if ($c_tipo > 0) {
        return($rs_tipo);
    }
    
}

function pesquisa_protocolo_numero($nu_protocolo_numero, $nu_protocolo_origem, $nu_protocolo_ano) {
    
    $conn   = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY PROTOCOLO
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $sql_prot = "
    SELECT
    s.nm_secretaria_extenso as nome_secretaria,
    p.id_protocolo,
    p.nu_protocolo_numero, 
    p.nu_protocolo_origem,
    p.nu_protocolo_ano,
    r.qt_estagiario,
    r.id_supervisor
    FROM
    tb_protocolo p
    INNER JOIN tb_requisicao r ON p.id_protocolo  = r.id_protocolo
    INNER JOIN tb_secretaria s ON s.cd_secretaria = r.cd_secretaria
    WHERE
    p.nu_protocolo_ano      = :nu_protocolo_ano AND
    p.nu_protocolo_origem   = :nu_protocolo_origem AND
    p.nu_protocolo_numero   = :nu_protocolo_numero";
    $stmt_prot = $conn->prepare($sql_prot); 
    $stmt_prot->bindValue(':nu_protocolo_ano',       $nu_protocolo_ano);
    $stmt_prot->bindValue(':nu_protocolo_origem',    $nu_protocolo_origem);
    $stmt_prot->bindValue(':nu_protocolo_numero',    $nu_protocolo_numero);
    $stmt_prot->execute();
    $rs_prot  = $stmt_prot->fetchAll(PDO::FETCH_ASSOC);    
    $c_prot   = count($rs_prot);
    
    if ($c_prot > 0) {
        
        return($rs_prot);
        
    } else {
        
        return(0);        
        
    }
    
}

function requisicao_altera_editar($id_protocolo) {
    
    $conn   = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY PROTOCOLO
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $sql_prot = "
    SELECT
    CONCAT(p.nu_protocolo_ano, p.nu_protocolo_origem, p.nu_protocolo_numero) as protocolo,
    CONCAT((SUBSTR(p.dt_protocolo, 9, 2)), (SUBSTR(p.dt_protocolo, 6, 2)), (SUBSTR(p.dt_protocolo, 1, 4))) as dt_protocolo,
    r.cd_secretaria,
    r.id_local_estagio,
    r.cd_tipo_contrato,
    r.cd_curso,
    r.qt_estagiario,
    r.id_supervisor,
    r.cd_lotacao_estagiario,
    r.id_requisicao
    FROM
    tb_requisicao r
    INNER JOIN tb_local_estagio l   ON l.id_local_estagio = r.id_local_estagio
    INNER JOIN tb_protocolo p       ON p.id_protocolo = r.id_protocolo  
    WHERE
    r.id_protocolo = :id_protocolo";
    $stmt_prot = $conn->prepare($sql_prot); 
    $stmt_prot->bindValue(':id_protocolo',           $id_protocolo);
    $stmt_prot->execute();
    $rs_prot  = $stmt_prot->fetch();    
    $c_prot   = count($rs_prot);
    
    if ($c_prot > 0) {
        
        return($rs_prot);
        
    } else {
        
        return(0);        
        
    }
    
}

function busca_supervisor($id_supervisor) {
    
    $conn   = conn();
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY SUPERVISOR
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $query_sup = "
    SELECT
    s.id_supervisor,
    s.nu_matricula_supervisor,
    s.nm_nome_supervisor,
    s.cd_lotacao_supervisor,
    s.cd_cargo_supervisor,
    s.nm_cargo_supervisor
    FROM
    tb_supervisor s
    WHERE
    s.id_supervisor = :id_supervisor";
    $stmt = $conn->prepare($query_sup);
    $stmt->bindValue(':id_supervisor',  $id_supervisor);
    $stmt->execute();     
    $rs_sup   = $stmt->fetch();
    $c_sup    = count($rs_sup);

    if ($c_sup > 0) {
        
        return($rs_sup);
        
    } else {
        
        return(0);        
        
    }
    
}

function busca_supervisor_matricula($nu_matricula_supervisor) {
    
    $conn   = conn();
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY SUPERVISOR
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $query_sup = "
    SELECT
    trim( leading 0 from MATR ) as matricula_supervisor,
    NOME                        as nome_supervisor,
    LOTACAO                     as lotacao_supervisor,
    CODC                        as codigo_cargo_supervisor,
    CARGO                       as cargo_supervisor
    FROM
    tb_cadastro
    WHERE
    trim( leading 0 from MATR ) = :nu_matricula_supervisor";
    $stmt_sup = $conn->prepare($query_sup); 
    $stmt_sup->bindValue(':nu_matricula_supervisor',           $nu_matricula_supervisor);
    $stmt_sup->execute();
    $rs_sup   = $stmt_sup->fetch();
    $c_sup    = count($rs_sup);

    if ($c_sup > 0) {
        
        return($rs_sup);
        
    } else {
        
        return(0);        
        
    }
    
}

function busca_supervisor_matricula_da_requisicao($nu_matricula_supervisor) {
    
    $conn   = conn();
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY SUPERVISOR
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $query_sup = "
    SELECT
    TRIM(LEADING 0 FROM cad.MATR) as MATR,
    cad.NOME,
    cad.LOTACAO,
    cad.CODC,
    cad.CARGO
    FROM 
    tb_requisicao req
    INNER JOIN tb_supervisor sup  ON sup.id_supervisor           = req.id_supervisor
    INNER JOIN tb_cadastro   cad  ON sup.nu_matricula_supervisor = TRIM(LEADING 0 FROM cad.MATR) 
    WHERE 
    sup.nu_matricula_supervisor = :nu_matricula_supervisor
    LIMIT 1";
    $stmt_sup = $conn->prepare($query_sup); 
    $stmt_sup->bindValue(':nu_matricula_supervisor',           $nu_matricula_supervisor);
    $stmt_sup->execute();
    $rs_sup   = $stmt_sup->fetch();
    $c_sup    = count($rs_sup);

    if ($c_sup > 0) {
        
        return($rs_sup);
        
    } else {
        
        return(0);        
        
    }
    
}

function busca_nome_lotacao($cd_lotacao) {
    
    $conn   = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY NOME LOTACAO
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $query = "
    SELECT
    nm_lotacao
    FROM
    tb_lotacao_API
    WHERE
    cd_lotacao = :cd_lotacao";
    $stmt = $conn->prepare($query); 
    $stmt->bindValue(':cd_lotacao',           $cd_lotacao);
    $stmt->execute();
    $rs   = $stmt->fetch();
    $c    = count($rs);

    if ($c > 0) {
        
        return($rs['nm_lotacao']);
        
    } else {
        
        return(0);        
        
    }
    
}

function busca_quantidade_estagiarios($nu_protocolo) {
    
    $nu_protocolo_ano           = substr($nu_protocolo, 0, 2);
    $nu_protocolo_origem        = substr($nu_protocolo, 3, 2);
    $nu_protocolo_numero        = substr($nu_protocolo, 6, 5);
    
    $conn   = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY - REQUISICAO ESTAGIARIO - QUANTIDADE ESTAGIARIOS
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $query = "
    SELECT
    r.qt_estagiario
    FROM
    tb_requisicao r
    INNER JOIN
    tb_protocolo p ON r.id_protocolo = p.id_protocolo
    WHERE 
    p.nu_protocolo_ano = :nu_protocolo_ano AND
    p.nu_protocolo_origem = :nu_protocolo_origem AND
    p.nu_protocolo_numero = :nu_protocolo_numero";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':nu_protocolo_ano',       $nu_protocolo_ano);
    $stmt->bindValue(':nu_protocolo_origem',    $nu_protocolo_origem);
    $stmt->bindValue(':nu_protocolo_numero',    $nu_protocolo_numero);    
    $stmt->execute();
    $rs   = $stmt->fetch();
    $c    = count($rs);

    if ($c > 0) {
        
        return($rs['qt_estagiario']);
        
    } else {
        
        return(NULL);        
        
    }
    
}

function busca_dados_estagiario($nu_protocolo) {
    
    $nu_protocolo_ano           = substr($nu_protocolo, 0, 2);
    $nu_protocolo_origem        = substr($nu_protocolo, 3, 2);
    $nu_protocolo_numero        = substr($nu_protocolo, 6, 5);
    
    $conn   = conn();

    $query = " 
    SELECT
    pro.nu_protocolo_ano,
    pro.nu_protocolo_origem,
    pro.nu_protocolo_numero,
    req.cd_lotacao_estagiario,
    req.cd_curso,
    lot.nm_lotacao,
    sec.cd_secretaria,
    sec.nm_secretaria,
    loc.nm_local_estagio,
    sup.nu_matricula_supervisor
    FROM
    tb_requisicao req
    INNER JOIN tb_secretaria    sec ON req.cd_secretaria     		= sec.cd_secretaria
    INNER JOIN tb_lotacao_API   lot ON req.cd_lotacao_estagiario 	= lot.cd_lotacao
    INNER JOIN tb_protocolo     pro ON pro.id_protocolo      		= req.id_protocolo
    INNER JOIN tb_local_estagio loc ON loc.id_local_estagio       = req.id_local_estagio
    INNER JOIN tb_supervisor    sup ON sup.id_supervisor          = req.id_supervisor
    WHERE
    pro.nu_protocolo_ano      = :nu_protocolo_ano AND
    pro.nu_protocolo_origem   = :nu_protocolo_origem AND
    pro.nu_protocolo_numero   = :nu_protocolo_numero";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':nu_protocolo_ano',       $nu_protocolo_ano);
    $stmt->bindValue(':nu_protocolo_origem',    $nu_protocolo_origem);
    $stmt->bindValue(':nu_protocolo_numero',    $nu_protocolo_numero);    
    $stmt->execute();
    $rs   = $stmt->fetch();
    $c    = count($rs);

    if ($c > 0) {
        
        return($rs);
        
    } else {
        
        return(NULL);        
        
    }                       
}

function verifica_existe_estagiario($nu_protocolo) {
    
    $nu_protocolo_ano           = substr($nu_protocolo, 0, 2);
    $nu_protocolo_origem        = substr($nu_protocolo, 3, 2);
    $nu_protocolo_numero        = substr($nu_protocolo, 6, 5);
    
    $conn = conn();

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    // QUERY - ESTAGIARIOS - ESTA CADASTRADO NA TABELA?
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    $query = "
    SELECT
    count(e.id_estagiarios) as quantidade
    FROM
    tb_estagiario_copy e
    INNER JOIN tb_protocolo p ON p.id_protocolo = e.id_protocolo
    WHERE
    p.nu_protocolo_ano    = :nu_protocolo_ano AND
    p.nu_protocolo_origem = :nu_protocolo_origem AND
    p.nu_protocolo_numero = :nu_protocolo_numero";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':nu_protocolo_ano',      $nu_protocolo_ano);
    $stmt->bindValue(':nu_protocolo_origem',   $nu_protocolo_origem);
    $stmt->bindValue(':nu_protocolo_numero',   $nu_protocolo_numero);
    $stmt->execute();
    $rs   = $stmt->fetch();
    $c    = count($rs);

    if ($c > 0) {        
        return($rs['quantidade']);        
    } else {        
        return(0);                
    }    
}

function carrega_smarty_padrao($smartyobj, $template) {
    
    $array_padrao =             
        array(
        'title'             => 'Estagiarios',
        'header_title'      => 'Estagiarios',
        'header_name'       => 'Início',
        'menu1'             => 'Requisições',
        'menu1_option1'     => 'cadastra',
        'menu1_option2'     => 'altera',
        'menu1_option3'     => '',
        'menu2'             => 'Encaminhamento',
        'menu2_option1'     => 'cadastra',
        'menu2_option2'     => 'altera',
        'menu2_option3'     => 'exclui',
        'menu3'             => 'Consulta',
        'menu3_option1'     => 'pesquisa',
        'menu3_option2'     => 'teste1',
        'menu3_option3'     => 'teste2',
        'link1_option1'     => 'requisicao_cadastra.php',
        'link1_option2'     => 'requisicao_altera.php',
        'link1_option3'     => '',
        'link2_option1'     => 'encaminhamento_cadastra.php',
        'link2_option2'     => 'encaminhamento_altera.php',
        'link2_option3'     => 'encaminhamento_exclui.php',
        'link3_option1'     => 'consulta_estagiarios.php',
        'link3_option2'     => '',
        'link3_option3'     => ''
        );

    $smartyobj->template_dir   = __DIR__ . '/../vendor/smarty/smarty/libs/templates/';
    $smartyobj->compile_dir    = __DIR__ . '/../vendor/smarty/smarty/libs/templates_c/';
    $smartyobj->config_dir     = __DIR__ . '/../vendor/smarty/smarty/libs/configs/';
    $smartyobj->cache_dir      = __DIR__ . '/../vendor/smarty/smarty/libs/cache/';

    foreach ($array_padrao as $key => $value) {

        $smartyobj->assign($key, $value);

    }

    $smartyobj->display($template);
    
}

function carrega_form_requisicao_cadastra() {   
    
    $smartyobj = new Smarty();

    $rs_sec = lista_secretarias();                  // SECRETARIAS
    $smartyobj->assign('secretarias', $rs_sec);

    $rs_cargos = lista_cargos();                    // CARGOS
    $smartyobj->assign('curso', $rs_cargos);

    $rs_local_estagio = lista_locais_estagio();     // LOCAIS ESTAGIO
    $c_local          = count($rs_local_estagio);

    $smartyobj->assign('local',        $rs_local_estagio);
    $smartyobj->assign('qt_registros', $c_local);

    $template_name = "requisicao_cadastra.tpl";
    
    carrega_smarty_padrao($smartyobj, $template_name);

}

function carrega_form_index() {   

    $smartyobj = new Smarty();

    $rs_sec = lista_secretarias();                  // SECRETARIAS
    $smartyobj->assign('secretarias', $rs_sec);

    $rs_cargos = lista_cargos();                    // CARGOS
    $smartyobj->assign('curso', $rs_cargos);

    $rs_local_estagio = lista_locais_estagio();     // LOCAIS ESTAGIO
    $c_local          = count($rs_local_estagio);

    $smartyobj->assign('local',        $rs_local_estagio);
    $smartyobj->assign('qt_registros', $c_local);

    $template_name = "index.tpl";    
    carrega_smarty_padrao($smartyobj, $template_name);    
            
}

function carrega_form_requisicao_altera() {
    
    $smartyobj = new Smarty();
    $smartyobj->assign('form_action',   'requisicao_altera.php');      
    $template_name = "requisicao_altera.tpl";
    carrega_smarty_padrao($smartyobj, $template_name);
    
}

function carrega_form_requisicao_altera_pesquisa($c, $rs_protocolo) {
    
    $smartyobj = new Smarty();    
    $smartyobj->assign('qt',            $c);
    $smartyobj->assign('protocolo',     $rs_protocolo);      
    $smartyobj->assign('form_action',   'requisicao_altera.php');          
    $template_name = "requisicao_altera.tpl";        
    carrega_smarty_padrao($smartyobj, $template_name);    
    
}

function carrega_form_requisicao_altera_editar($id_protocolo, $protocolo, $dt_protocolo, $cd_secretaria, $id_local_estagio, $cd_tipo_contrato, $cd_curso, $qt_estagiario, $id_supervisor, $cd_lotacao_estagiario, $id_requisicao) {
    
    $smartyobj = new Smarty();    
    
    $rs_secretarias         = lista_secretarias();                                          // LISTA DAS SECRETARIAS    
    $rs_cargos              = lista_cargos();                                               // LISTA DOS CARGOS DE ESTAGIARIOS
    $rs_locais_estagio      = lista_locais_estagio();                                       // LISTA DOS LOCAIS DE ESTAGIO
    $c_registros_local      = count($rs_locais_estagio);                                    // QTDE REGISTROS LOCAIS ESTAGIO
    $rs_tipos_contrato      = lista_tipo_contrato();                                        // LISTA DOS TIPOS DE CONTRATO    
    $rs_supervisor          = busca_supervisor($id_supervisor);                             // BUSCA SUPERVISOR
    
    $smartyobj->assign('protocolo',                 $protocolo);   
    $smartyobj->assign('dt_protocolo',              $dt_protocolo);
    $smartyobj->assign('secretarias',               $rs_secretarias);
    $smartyobj->assign('cd_secretaria',             $cd_secretaria);
    $smartyobj->assign('qt_registros_local',        $c_registros_local);    
    $smartyobj->assign('local',                     $rs_locais_estagio);
    $smartyobj->assign('id_local_estagio',          $id_local_estagio);
    $smartyobj->assign('cd_tipo_contrato',          $cd_tipo_contrato);
    $smartyobj->assign('tipos_contrato',            $rs_tipos_contrato);
    $smartyobj->assign('cd_curso',                  $cd_curso);
    $smartyobj->assign('curso',                     $rs_cargos);
    $smartyobj->assign('qt_estagiario',             $qt_estagiario);
    $smartyobj->assign('nu_matricula_supervisor',   $rs_supervisor['nu_matricula_supervisor']);
    $smartyobj->assign('cd_lotacao_estagiario',     $cd_lotacao_estagiario);
    $smartyobj->assign('id_protocolo',              $id_protocolo);    
    $smartyobj->assign('id_requisicao',             $id_requisicao);   
    $smartyobj->assign('id_supervisor',             $id_supervisor);    
    $smartyobj->assign('id',                        $id_supervisor);    
    $smartyobj->assign('form_action',               'requisicao_altera_editar.php');

    $template_name = "requisicao_altera_editar.tpl";        
    carrega_smarty_padrao($smartyobj, $template_name);    
    
}

function carrega_form_encaminhamento_cadastra() {   
    
    $smartyobj      = new Smarty();
    $template_name  = "encaminhamento_cadastra.tpl";
    
    carrega_smarty_padrao($smartyobj, $template_name);

}

function carrega_form_consulta_estagiarios() {
    
    $smartyobj = new Smarty();    
//    $smartyobj->assign('qt',            $c);
//    $smartyobj->assign('protocolo',     $rs_protocolo);      
//    $smartyobj->assign('form_action',   'requisicao_altera.php');          
    $template_name = "consulta_estagiarios.tpl";        
    carrega_smarty_padrao($smartyobj, $template_name);    
    
}