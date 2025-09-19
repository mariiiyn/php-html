<?php
    require_once ("funcoes.php");//inclui o arquivo funcoes
    
    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"]?? '';
    
    conecta($usuario, $senha);//chama a funcao

?>    