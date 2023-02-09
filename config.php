<?php

define("DIR_FS_SISTEMA", __DIR__ . "/");
define("DIR_WS_SISTEMA", "http://localhost/VJD-Site/");

define("DIR_FS_INCLUDES", DIR_FS_SISTEMA . "lib/");
define('DIR_FS_CLASSES', DIR_FS_SISTEMA . '/classes/');
define("DIR_FS_CONFIG", DIR_FS_SISTEMA);


define("DIR_FS_SISTEMA_INC", DIR_FS_SISTEMA . "inc/");
define("DIR_WS_SISTEMA_INC", DIR_WS_SISTEMA . "inc/");
define("BD_TIPO_CONEXAO", "mysqli");
define("BD_HOST", "localhost");
define("BD_USR", "root");
define("BD_PASS", "");
define("BD_BANCO_DE_DADOS", "Site");
define("NOME_SESSAO", "rek_site");
define('COOKIE_LOGIN', "rek_site_login");
define("AMBIENTE", "sandbox"); //production


$logFile = DIR_FS_SISTEMA . "logs/exec_errors.log"; // Log de erro
// Grava erros no arquivo de log
function Handler($eNum, $eMsg, $file, $line, $eVars)
{
    $logFile = DIR_FS_SISTEMA . "logs/exec_errors.log";
    $e = "";
    $Data = date("Y-m-d H:i:s (T)");

    $errortype = array(
        E_ERROR => 'ERROR',
        E_WARNING => 'WARNING',
        E_PARSE => 'PARSING ERROR',
        E_RECOVERABLE_ERROR => 'CATCHABLE FATAL ERROR'
    );
    if (array_key_exists($eNum, $errortype)) {
        if (strlen($errortype[$eNum]) > 2) {
            $e .= "**********************************************************\n";
            $e .= $eNum . " " . $errortype[$eNum] . " - ";
            $e .= $Data . "\n";
            $e .= " ARQUIVO: " . $file . "(Linha " . $line . ")\n";
            $e .= " MENSAGEM: " . "\n" . $eMsg . "\n\n";

            error_log($e, 3, $logFile);
        }
    }
}

$olderror = set_error_handler("Handler");
ini_set('error_log', $logFile);
ini_set('log_errors', 'On');
ini_set('display_errors', 'On');
ini_set("date.timezone", "America/Sao_Paulo");

include(__DIR__ . '/vendor/adodb/adodb-php/adodb-errorhandler.inc.php');
