<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
ob_start();
date_default_timezone_set('America/Sao_Paulo');

require_once(dirname(__FILE__) . '/conexao.php');                                                       // conexão com o banco de dados
require_once(dirname(__FILE__) . '/i_func.php');                                                        // funções
require_once(dirname(__FILE__) . '/../vendor/php-console/php-console/src/PhpConsole/__autoload.php');
//require_once(dirname(__FILE__) . '/class/carregaSmarty.php');

?>