<?php

$bdServidor = 'localhost';
$bdUsuario='root';
$bdSenha = '';
$bdBanco = 'agenda';

mysqli_report(MYSQLI_REPORT_OFF);

$conexao=@mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (!$conexao) {
    echo ('Erro de Conexão:'.
        mysqli_connect_error());
    die();
}
?>
