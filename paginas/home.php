<?php
include_once('..\includes\header.php');
    if (isset($_GET['acao'])) {
        $acao = $_GET['acao'];
        if ($acao == 'processos_origem_todos') {
            include_once('conteudo\processos_origem_todos.php');
        }elseif ($acao == 'contratos_todos') {
            include_once('conteudo\contratos_todos.php');
        }
    }else{
       
    }
include_once('..\includes\footer.php');
?>